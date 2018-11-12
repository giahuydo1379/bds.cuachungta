<?php

namespace App\Http\Controllers\Admin;

use App\Models\Asset;

use App\Models\AssetCategory;
use App\Models\District;
use App\Models\ProductCategory;
use App\Models\Province;
use App\Models\Ward;
use App\Models\AssetFeatureValue;
use App\Models\AssetImage;
use Illuminate\Http\Request;

use App\Helpers\General;
use App\Models\Manufacturer;

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
use Log;
use Session;
use App\Models\AssetFeature;
use DB;

//use Symfony\Component\HttpFoundation\Request;

class AssetController extends Controller
{
    private $_data = array();
    private $_model;

    /* *
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->_data['title'] = 'Sản phẩm';
        $this->_data['controllerName'] = 'asset';
        $this->_model = new Asset();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->_data['status'] = ['' => ''] + $this->_model->getStatusFilter();
        $this->_data['province'] = ['' => ''] + $this->_model->getProvince();
        $this->_data['assetCate'] = ['' => ''] + $this->_model->getAssetCategory();

        return view("admin.{$this->_data['controllerName']}.index", $this->_data);
    }

    public function search(Request $request)
    {
        $filter = [
            'offset' => $request->input('offset', 0),
            'limit' => $request->input('limit', 10),
            'sort' => $request->input('sort', 'assets.id'),
            'order' => $request->input('order', 'asc'),
            'search' => $request->input('search', ''),
            'status' => $request->input('status', '1'),
            'province_id' => $request->input('province_id', ''),
            'asset_category_id' => $request->input('asset_category_id', ''),

        ];

        $data = $this->_model->getListAll($filter);


        return response()->json([
            'total' => $data['total'],
            'rows' => $data['data'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = array('' => '') + AssetCategory::getCategory();
        $assetFeature = array('' => '') + AssetFeature::getAssetFeature();
        $type = array('' => '') + $this->_model->getOptionsType();
        $this->_data['type'] = $type;

        $this->_data['orderOptions'] = General::getOrderOptions();

        $this->_data['category'] = $category;
        $this->_data['assetFeature'] = $assetFeature;

        return view("admin.{$this->_data['controllerName']}.edit", $this->_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (empty($data['image_url'])) {
            $data['image_url'] = config('app.url');
        }

        $object = $this->_model->create($data);

        if ($object) {
            if (isset($data['product_images'])) {
                $this->store_product_images($object->id, $data['product_images']);
            }

            if (isset($data['fvv'])) {
                $this->store_asset_features_values($object->id, $data['fvv']);
            }

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'rs' => 1,
                    'msg' => 'Thêm mới ' . $this->_data['title'] . ' thành công'
                ]);
            }

            return redirect()->route("{$this->_data['controllerName']}.index");
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'rs' => 0,
                'msg' => 'Thêm mới ' . $this->_data['title'] . ' không thành công'
            ]);
        }

        return redirect("/admin/{$this->_data['controllerName']}/add");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = Asset::find($id);
        if (!$query) {
            abort(404);
        }

        $object = $query->toArray();

        $assetFeaturesValues = AssetFeatureValue::select(['asset_features_values.*', 'asset_features_variants.name as variant_name'])
            ->where('asset_id', $id)
            ->leftJoin('asset_features_variants', 'asset_features_variants.id', '=', 'asset_features_values.variant_id')
            ->get()->toArray();
        $this->_data['variants'] = $assetFeaturesValues;

        $category = array('' => '') + AssetCategory::getCategory();
        $assetFeature = array('' => '') + AssetFeature::getAssetFeature();

        $type = array('' => '') + $this->_model->getOptionsType();
        $this->_data['type'] = $type;

        $this->_data['orderOptions'] = General::getOrderOptions();

        $this->_data['category'] = $category;
        $this->_data['assetFeature'] = $assetFeature;

        $this->_data['product_images'] = AssetImage::select(\DB::Raw('CONCAT(image_url, image) as image'), 'id')->where('asset_id', $id)->pluck('image', 'id');

        $this->_data['object'] = $object;

        return view("admin.{$this->_data['controllerName']}.edit", $this->_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $object = $this->_model->find($id);

        if (!$object) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'rs' => 0,
                    'msg' => 'Lỗi không tồn tại'
                ]);
            }

            return redirect()->route("{$this->_data['controllerName']}.index");
        }

        $data = $request->all();

        if (empty($data['image_url'])) {
            $data['image_url'] = config('app.url');
        }

        unset($data['_token']);

        $rs = $object->update($data);

        if ($rs && isset($data['product_images'])) {
            $this->store_product_images($id, $data['product_images']);
        }

        if ($rs && isset($data['fvv'])) {
            $this->store_asset_features_values($id, $data['fvv']);
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'rs' => 1,
                'msg' => 'Chỉnh sửa ' . $this->_data['title'] . ' thành công'
            ]);
        }

        return redirect()->route("{$this->_data['controllerName']}.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $object = $this->_model->find($id);

        if (!$object || !$id) {
            return response()->json([
                'rs' => 0,
                'msg' => 'Xóa ' . $this->_data['title'] . ' không thành công',
            ]);
        }

        $object->is_deleted = 1;

        $object->save();

        return response()->json([
            'rs' => 1,
            'msg' => 'Xóa ' . $this->_data['title'] . ' thành công',
        ]);
    }

    public function ajaxGetCategoryByManufacturer($manufacturer_id)
    {
        $res = [];

        if (!empty($manufacturer_id)) {
            $res = ProductCategory::ajaxGetCategoryBymanufacturer($manufacturer_id);
        }

        return response()->json($res);
    }

    public function getDistrict($id)
    {
        $res = [];

        $res = Asset::getDistrict($id);
        //dd($res);

        return response()->json($res);
    }

    public function getWard($id)
    {
        $res = [];

        $res = Asset::getWard($id);


        return response()->json($res);
    }

    public function getAssetFeatureVariant($id)
    {
        $res = [];

        $res = Asset::getAssetFeatureVariant($id);
        //dd($res);

        return response()->json($res);
    }

    public function store_asset_features_values($asset_id, $fvv)
    {
        AssetFeatureValue::where('asset_id', $asset_id)->delete();
        foreach ($fvv as $item) {
            AssetFeatureValue::create([
                'asset_id' => $asset_id,
                'feature_id' => $item['feature_id'],
                'variant_id' => $item['variant_id'],
            ]);
        }
    }

    public function store_product_images($asset_id, $product_images)
    {
        if (isset($product_images['delete'])) {
            AssetImage::where('asset_id', $asset_id)
                ->whereIn('id', $product_images['delete'])->delete();
            unset($product_images['delete']);
        }
        foreach ($product_images as $item) {
            if ($item['id']) {
                continue;
            }
            AssetImage::create([
                'asset_id' => $asset_id,
                'image' => $item['image'],
                'image_url' => config('app.url')
            ]);
        }
    }


    public function ajaxActive(Request $request)
    {
        $ids = $request->all()['ids'];

        if (!empty($ids)) {
            foreach ($ids as $id) {
                $object = $this->_model->find($id);
                $object->status = 1;
                $object->save();
            }
            return response()->json([
                'rs' => 1,
                'msg' => 'Kích hoạt ' . $this->_data['title'] . ' thành công',
                'act' => 'active'
            ]);
        }

        return response()->json([
            'rs' => 1,
            'msg' => 'Kích hoạt ' . $this->_data['title'] . ' không thành công',
            'act' => 'active'
        ]);
    }

    /**
     * Enter description here ...
     * @return Ambigous <\Illuminate\Routing\Redirector, \Illuminate\Http\RedirectResponse>
     * @author HaLV
     */
    public function ajaxInactive(Request $request)
    {
        $ids = $request->all()['ids'];

        if (!empty($ids)) {
            foreach ($ids as $id) {
                $object = $this->_model->find($id);
                $object->status = 0;
                $object->save();
            }
            return response()->json([
                'rs' => 1,
                'msg' => 'Ngừng kích hoạt ' . $this->_data['title'] . ' thành công',
                'act' => 'inactive'
            ]);
        }

        return response()->json([
            'rs' => 1,
            'msg' => 'Ngừng kích hoạt ' . $this->_data['title'] . ' không thành công',
            'act' => 'inactive'
        ]);
    }

    /**
     * Enter description here ...
     * @return Ambigous <\Illuminate\Routing\Redirector, \Illuminate\Http\RedirectResponse>
     * @author HaLV
     */
    public function ajaxDelete(Request $request)
    {
        $ids = $request->all()['ids'];

        if (!empty($ids)) {
            foreach ($ids as $id) {
                $object = $this->_model->find($id);
                $object->is_deleted = 1;
                $object->save();
            }
            return response()->json([
                'rs' => 1,
                'msg' => 'Xóa ' . $this->_data['title'] . ' thành công',
                'act' => 'delete'
            ]);
        }

        return response()->json([
            'rs' => 1,
            'msg' => 'Xóa ' . $this->_data['title'] . ' không thành công',
            'act' => 'delete'
        ]);
    }
}

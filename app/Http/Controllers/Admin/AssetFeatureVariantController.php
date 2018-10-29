<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductCategory;
use App\Models\AssetFeatureVariant;
use Illuminate\Http\Request;
use App\Http\Requests\AssetFeatureVariantRequest;
use App\Helpers\General;

class AssetFeatureVariantController extends Controller
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
        $this->_data['title'] = 'Giá trị thuộc tính';
        $this->_data['controllerName'] = 'asset-feature-variant';
        $this->_model = new AssetFeatureVariant();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.{$this->_data['controllerName']}.index", $this->_data);
    }

    public function search(Request $request)
    {
        $filter = [
            'offset' => $request->input('offset', 0),
            'limit' => $request->input('limit', 10),
            'sort' => $request->input('sort', 'asset_features_variants.id'),
            'order' => $request->input('order', 'asc'),
            'search' => $request->input('search', ''),
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

        $assetFeature  = array('' => '') + AssetFeatureVariant::getAssetFeature();
        $orderOptions = General::getOrderOptions();
        $this->_data['orderOptions'] = $orderOptions;
         $this->_data['assetFeature'] = $assetFeature;

        return view("admin.{$this->_data['controllerName']}.create", $this->_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetFeatureVariantRequest $request)
    {
        $data = $request->all();

        unset($data['_token']);

        $object = $this->_model->create($data);

        if ($object)
        {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'rs' => 1,
                    'msg' => 'Thêm mới '.$this->_data['title'].' thành công'
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $object = $this->_model->find($id)->toArray();

        $this->_data['id'] = $id;
        $this->_data['object'] = $object;

        $assetFeature  = array('' => '') + AssetFeatureVariant::getAssetFeature();
        $orderOptions = General::getOrderOptions();
        $this->_data['orderOptions'] = $orderOptions;
         $this->_data['assetFeature'] = $assetFeature;

        return view("admin.{$this->_data['controllerName']}.edit", $this->_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $object  = $this->_model->find($id);

        if (!$object)
        {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'rs' => 0,
                    'msg' => 'Lỗi không tồn tại'
                ]);
            }

            return redirect()->route("{$this->_data['controllerName']}.index");
        }

        $data = $request->all();

        unset($data['_token']);

        $object->update($data);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'rs' => 1,
                'msg' => 'Chỉnh sửa '.$this->_data['title'].' thành công'
            ]);
        }

        return redirect()->route("{$this->_data['controllerName']}.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $object  = $this->_model->find($id);

        if (!$object || !$id)
        {
            return response()->json([
                'rs' => 0,
                'msg' => 'Xóa '.$this->_data['title'].' không thành công',
            ]);
        }

        $object->is_deleted = 1;

        $object->save();

        return response()->json([
            'rs' => 1,
            'msg' => 'Xóa '.$this->_data['title'].' thành công',
        ]);
    }

    public function ajaxGetCategoryByManufacturer($manufacturer_id)
    {
        $res = [];

        if (!empty($manufacturer_id))
        {
            $res = ProductCategory::ajaxGetCategoryBymanufacturer($manufacturer_id);
        }

        return response()->json($res);
    }

}

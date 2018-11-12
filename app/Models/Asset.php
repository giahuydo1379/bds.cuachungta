<?php
 namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\District;

class Asset extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assets';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description', 'type', 'position', 'content', 'image', 'image_url', 'asset_category_id',
        'province_id', 'district_id', 'ward_id', 'acreage',
        'price', 'is_hot', 'created_by', 'updated_by',
        'status', 'created_at', 'updated_at', 'is_deleted', 'embed_map'];

//    protected $hidden = ['parent_id', 'is_deleted'];

    public static function getListAll($filter)
    {
        $scope = [
            'assets.*', 'districts.name as districtname', 'provinces.name as provincename', 'asset_categories.name as assetCateName'
        ];

        $sql = self::select($scope)

       ->leftJoin('provinces', 'provinces.province_id', '=', 'assets.province_id')
        ->leftJoin('districts', 'districts.district_id', '=', 'assets.district_id')
        ->leftJoin('asset_categories', 'asset_categories.id', '=', 'assets.asset_category_id');
       
        

        $sql->where('assets.is_deleted', 0);

        if (!empty($keyword = $filter['search'])) {
            $sql->where(function ($query) use ($keyword) {
                $query->where('assets.name', 'LIKE', '%' . $keyword . '%');
            });
        }

        if (isset($filter['status'])) {
            $sql->where('assets.status', $filter['status']);
        }
        if (isset($filter['province_id'])) {
            $sql->where('assets.province_id', $filter['province_id']);
        }

        if (isset($filter['asset_category_id'])) {
            $sql->where('assets.asset_category_id', $filter['asset_category_id']);
        }


        $total = $sql->count();

       
        $data = $sql->skip($filter['offset'])
            ->take($filter['limit'])
            ->orderBy($filter['sort'], $filter['order'])
            ->get()
            ->toArray();
      

        return ['total' => $total, 'data' => $data];
    }

    public static function getParentOptions()
    {
        $data = ProductCategory::select('id', 'name')->pluck('name', 'id');

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }

    public static function getCategoryOptions()
    {
        $data = ProductCategory::select('id', 'name')->pluck('name', 'id');

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }

    public static function getAssetsHot($limit=4)
    {
        $query = self::select(['*']);

        $query->where('assets.is_deleted', 0);
        $query->where('assets.is_hot', 1);
        $query->where('assets.status', 1);

        $query->orderBy('assets.position', 'asc');
        $query->orderBy('assets.id', 'desc');

        return $query->limit($limit)->get();
    }

    public static function getTopAssetsByType($type='lease', $limit=4)
    {
        $query = self::select(['*']);

        $query->where('assets.is_deleted', 0);
        $query->where('assets.is_hot', 1);
        $query->where('assets.status', 1);
        $query->where('assets.type', $type);

        $query->orderBy('assets.position', 'asc');
        $query->orderBy('assets.id', 'desc');

        return $query->limit($limit)->get();
    }

    public static function getCategoryById($id)
    {
        $data = ProductCategory::select('product_categories.*', 'manufacturers.name as manufacturer_name')
            ->leftJoin('manufacturers', 'manufacturers.id', '=', 'product_categories.manufacturer_id')
            ->where('product_categories.id', $id)
            ->where('product_categories.is_deleted', 0)->first();

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }

    public static function ajaxGetCategoryBymanufacturer($manufacturer_id)
    {
        $data = ProductCategory::select('id', 'name')-> where('product_categories.manufacturer_id', $manufacturer_id)->pluck('name', 'id');

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }

    public static function getProvince()
    {
        $data = Province::pluck('name', 'province_id');

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }

    public static function getAssetCategory()
    {
        $data = AssetCategory::pluck('name', 'id');

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }


    public static function getDistrict($idProvince)
    {
        $data = District::where('province_id', $idProvince)->pluck('name', 'district_id');

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }

    public static function getWard($id)
    {
        $data = Ward::where('district_id', $id)->pluck('name', 'ward_id');

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }

    public static function getAssetFeatureVariant($idFeature)
    {
        $data = AssetFeatureVariant::select('id', 'name')-> where('asset_features_variants.feature_id', $idFeature)->get();//->pluck('name','district_id');

        if (!empty($data)) {
            return $data->toArray();
        }

        return  array();
    }
    public static function getStatusFilter()
    {
        return array(
            '1' => 'Đang hoạt động',
            '0' => 'Không hoạt động',
        );
    }

    public function getOptionsType()
    {
        return array(
            'buy' => 'Cho thuê',
            'lease' => 'Cần thuê',
        );
    }

    public function district()
    {
        return $this->hasOne('App\Models\District', 'district_id', 'district_id');
    }
    public function ward()
    {
        return $this->hasOne('App\Models\Ward', 'ward_id', 'ward_id');
    }

    public static function getSearchAssets($params)
    {
        $query = self::select('assets.*') //, 'product_categories.name as category_name'
//            ->leftJoin('product_categories', 'product_categories.id', '=', 'articles.category_id')
            ->where(['status' => 1, 'is_deleted' => 0]);

        if (isset($params['kw'])) {
            $query->where('assets.name', 'LIKE', '%' . $params['kw'] . '%');
        }

        if (isset($params['province'])) {
            $query->where('assets.province_id', $params['province']);
        }

        if (isset($params['district'])) {
            $query->where('assets.district_id', $params['district']);
        }

        if (isset($params['cid'])) {
            $query->where('assets.asset_category_id', $params['cid']);
        }

        $query->orderBy($params['sort']??'assets.position', $params['order']??'asc');

        return $query->paginate($params['limit']??12);
    }
}

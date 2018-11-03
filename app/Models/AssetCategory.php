<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'asset_categories';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'type', 'description', 'is_deleted', ];

//    protected $hidden = ['deleted_at', 'is_deleted'];

    public static function getListAll($filter){

        $sql = self::select('manufacturers.*');
//        $sql->where('manufacturers.is_deleted', 0);

        if (!empty($keyword = $filter['search'])) {
            $sql->where(function ($query) use ($keyword) {
                $query->where('manufacturers.name', 'LIKE', '%' . $keyword . '%');
            });
        }

        $total = $sql->count();

        $data = $sql->skip($filter['offset'])
            ->take($filter['limit'])
            ->orderBy($filter['sort'], $filter['order'])
            ->get()
            ->toArray();

        return ['total' => $total, 'data' => $data];
    }

    public static function getCategory(){

        $data = AssetCategory::select('id','name')->pluck('name','id');

        if(!empty($data))
        {
            return $data->toArray();
        }

        return  array();
    }

    public function province()
    {
        return $this->belongsTo('App\Models\Province', 'province_id');
    }
}
?>
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

    protected $fillable = ['name', 'created_at', 'updated_at', 'is_deleted', 'description', 'position', 'status', 'created_by'];

    protected $hidden = ['status', 'is_deleted'];

    public static function getAssetCategories() {
        $objects = self::select('id', 'name', 'type')
            ->where('status', 1)
            ->where('is_deleted', 0)
            ->orderBy('position', 'asc')
            ->get();

        $rs = [];
        foreach ($objects as $item) {
            $rs[$item['type']][$item['id']] = $item['name'];
        }

        return $rs;
    }
}
?>

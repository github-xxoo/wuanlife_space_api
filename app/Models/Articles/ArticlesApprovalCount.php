<?php
namespace App\Models\Articles;
use Illuminate\Database\Eloquent\Model;
class ArticlesApprovalCount extends Model
{
    protected $table = 'articles_approval_count';
    protected $primaryKey = 'article_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $casts = [
        'article_id' => 'int',
        'count' => 'int'
    ];
    protected $fillable = [
        'count'
    ];
  
    /**
     * 获得文章点赞数目
     * @param $id
     * @return int
     */
    public static function getApprovedNum($id)
    {
        $res = self::where('article_id',$id) -> get();
        if($res){
            return $res[0]->count;
        }else{
            return 0;
        }
    }
}
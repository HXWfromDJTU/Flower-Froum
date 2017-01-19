<?php
/**
 * Created by HBuilder.
 * User: HXW
 * Date: 16-12-9
 * Time: 下午14:55
 */
namespace Index\Model;
use Think\Model;
class MediaModel extends Model{
    protected $media;
    public  function __construct()
    {
        parent::__construct();
        $this->media=M('Media');
    }
	/*postMedia方法用于插入media数据*/
    public function postMedia($text,$img1,$img2,$img3,$img4,$img5,$img6,$mediaType,$title,$videoSource,$userID,$postTime){
    	/*将接受的数据打包成$data，这里data的下标名字，需要与表中字段名称对应*/
    	$data['text']=$text;
		$data['title']=$title;
		$data['img1']=$img1;
		$data['img2']=$img2;
		$data['img3']=$img3;
		$data['img4']=$img4;
		$data['img5']=$img5;
		$data['img6']=$img6;
		$data['videoSource']=$videoSource;
		$data['mediaType']=$mediaType;
		$data['posterID']=$userID;
		$data['postTime']=$postTime;
		/*返回被操作的id*/
		$rs=$this->media->add($data);
        return $rs;
    }
	/*postMedia方法用于插入media数据*/
    public function loadImgMedia($mediaType){
    	/*将接受的数据打包成$data，这里data的下标名字，需要与表中字段名称对应*/
		$data['mediaType']=$mediaType;
		/*返回被操作的id*/
		$rs=$this->media->where($data['mediaType'])->select();
        return $rs;
    }
	
	
	/*searchMedia方法用于main主页的搜索页面搜索media数据*/
    public function searchMedia($keyword){
    	/*在这里实现模糊查询*/
    	$condition['title'] = array('like','%'.$keyword.'%');;
		$condition['text'] = array('like','%'.$keyword.'%');;
		$condition['_logic'] = 'OR';
		/*返回被操作的id*/
		$rs=$this->media->where($condition)->select();
        /*return json_encode($rs);*/
        return $rs;
    }
	/*loadEssay()方法用于文章页面初始化加载文章内容*/
    public function loadEssay(){
    	/*在这里实现模糊查询*/
    	$data['mediaType'] = "1";
		/*返回被操作的id*/
		/*$rs=$this->media->join('comment ON comment.toMediaID = media.id')->group('media.id')->join('user ON user.id = media.posterID')->order('postTime desc')->field('user.id as authorID,user.nickname,user.headImgSrc,media.id as essayID,media.title,media.img1,media.tag,media.postTime,media.readNum,count(comment.toMediaID) as commentNum')->where($data)->select();*/
		$rs=$this->media->join('user ON user.id = media.posterID')->group('media.id')->order('postTime desc')->field('user.id as authorID,user.nickname,user.headImgSrc,media.id as essayID,media.title,media.img1,media.tag,media.postTime,media.readNum')->where($data)->select();
        return $rs;
    }
	/*loadVideo()方法用于视频列表页面初始化加载文章内容*/
    public function loadVideo(){
    	/*在这里实现模糊查询*/
    	$data['mediaType'] = "2";
		/*返回被操作的id*/
		$rs=$this->media->join('user ON user.id = media.posterID')->order('postTime desc')->field('user.nickname,user.headImgSrc,media.title,media.img1,media.postTime,media.id,media.videoSource,media.text')->where($data)->select();
        /*return json_encode($rs);*/
        return $rs;
    }
	/*loadImg()方法用于视频列表页面初始化加载文章内容*/
    public function loadImg(){
    	/*在这里实现模糊查询*/
    	$data['mediaType'] = "0";
		/*返回被操作的id*/
		$rs=$this->media->join('user ON user.id = media.posterID')->order('postTime desc')->field('thumbupNum,collectionNum,nickname,headImgSrc,title,img1,img2,img3,img4,img5,img6,postTime,media.id,text')->where($data)->select();
        /*return json_encode($rs);*/
        return $rs;
    }
	/*loadEssayDetail()方法用于文章详细页面初始化加载文章内容(不包括品论部分)*/
    public function loadEssayDeatil($essayID,$username){
    	$data['mediaType'] = "1";
		$data['id'] = $essayID;
		/*返回被操作的id*/
		$rs=$this->media->field('title,img1,img2,img3,img4,img5,img6,text,postTime,readNum')->where($data)->select();
        /*return json_encode($rs);*/
        return $rs;
    }

	/*loadEssayDetail()方法用于文章详细页面初始化加载文章内容(不包括品论部分)*/
    public function loadMyPost($userID){
    	$data['posterID'] = $userID;
		/*返回被操作的id*/
		$rs=$this->media->field('img1,mediaType,id')->where($data)->select();
        /*return json_encode($rs);*/
        return $rs;
    }

	
	
}
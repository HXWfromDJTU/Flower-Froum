<?php
namespace Index\Controller;
use Think\Controller;
class MediaController extends Controller {

	protected $mediaPath;
	public function __construct() {
		parent::__construct();
		$this -> mediaPath = new \Index\Model\MediaModel();
	}
	/*postMedia()方法用于插入发表的媒体内容*/
	public function postMedia() {
		$title = $_POST["title"];
		$videoSource = $_POST["videoSource"];
		$text = $_POST["text"];
		$img1 = $_POST["img1"];
		$img2 = $_POST["img2"];
		$img3 = $_POST["img3"];
		$img4 = $_POST["img4"];
		$img5 = $_POST["img5"];
		$img6 = $_POST["img6"];
		$mediaType = $_POST["mediaType"];
		$userID = $_POST["userID"];
		$datetime = new \DateTime;
		$postTime = $datetime -> format('Y-m-d H:i:s');
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> mediaPath -> postMedia($text, $img1, $img2, $img3, $img4, $img5, $img6, $mediaType,$title,$videoSource,$userID,$postTime);
		/*返回结果集给前端*/
		echo json_encode($resData);
	}
	
	/*loadImgMedia()方法用于插入发表的媒体内容*/
	public function loadImgMedia() {
		$mediaType = $_POST["mediaType"];
		/*设定结果集*/
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$rs = $this -> mediaPath -> loadImgMedia($mediaType);
		/*返回结果给前端*/
		echo $rs;
	}
	
	/*loadImgMedia()方法用于搜索页面插入发表的媒体内容*/
	public function searchMedia() {
		$keyword = $_POST["keyword"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> mediaPath -> searchMedia($keyword);
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
	/*loadEssay()方法用于文章页面初始化加载文章内容*/
	public function loadEssay() {
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> mediaPath -> loadEssay();
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	/*loadVideo()方法用于文章页面初始化加载文章内容*/
	public function loadVideo() {
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> mediaPath -> loadVideo();
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
	/*loadVideo()方法用于文章页面初始化加载文章内容*/
	public function loadImg() {
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> mediaPath -> loadImg();
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
	/*loadEssayDetail()方法用于文章详细页面初始化加载文章内容(不包括品论部分)*/
	public function loadEssayDeatil() {
		$essayID=$_POST["essayID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> mediaPath -> loadEssayDeatil($essayID,$username);
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
	
	public function loadMyPost() {
		$userID=$_POST["userID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> mediaPath -> loadMyPost($userID);
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
	
	
	
}

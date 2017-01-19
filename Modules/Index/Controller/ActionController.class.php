<?php
namespace Index\Controller;
use Think\Controller;
class ActionController extends Controller {
	protected $commentPath;
	public function __construct() {
		parent::__construct();
		$this -> actionPath = new \Index\Model\ActionModel();
		$this -> userPath = new \Index\Model\UserModel();
	}
	
	public function loadMessage() {
		$userID = $_POST["userID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> actionPath -> loadMessage($userID);
		/*返回结果集给前端*/
		echo json_encode($resData);
	}

	public function loadCommentInfo() {
		$essayID = $_POST["essayID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> actionPath -> loadCommentInfo($essayID);
		/*返回结果集给前端*/
		echo json_encode($resData);
	}
	
	public function pushComment() {
		$essayID = $_POST["essayID"];
		$username = $_POST["username"];
		$content = $_POST["content"];
		/*记录当前存储时间*/
		$datetime = new \DateTime;
		$commentTime=$datetime->format('Y-m-d H:i:s');
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> actionPath -> pushComment($essayID,$username,$content,$commentTime);
		/*返回结果集给前端*/
		echo json_encode($resData);
	}
	
	
	public function thumbup() {
		$mediaID=$_POST["mediaID"];
		$userID=$_POST["userID"];	
		$thumbupNum=$_POST["thumbupNum"];
		$datetime = new \DateTime;
		$thumbupTime=$datetime->format('Y-m-d H:i:s');
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> actionPath -> thumbup($mediaID,$userID,$thumbupTime,$thumbupNum);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	
	public function collect() {
		$mediaID=$_POST["mediaID"];
		$userID=$_POST["userID"];	
		$collectNum=$_POST["collectNum"];
		$datetime = new \DateTime;
		$collectTime=$datetime->format('Y-m-d H:i:s');
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> actionPath -> collect($mediaID,$userID,$collectTime,$collectNum);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	
	
	
	
	
	public function loadMyCollection() {
		$userID=$_POST["userID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]=$this -> actionPath -> loadMyCollection($userID);
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
	
	
	public function deleteMyCollection() {
		$userID = $_POST["userID"];
		$mediaID = $_POST["mediaID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> actionPath -> deleteMyCollection($userID, $mediaID);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
}

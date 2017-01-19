<?php
/**
 * Created by HBuilder.
 * User: HXW
 * Date: 16-12-9
 * Time: 下午14:55
 */
namespace Index\Model;
use Think\Model;
class ActionModel extends Model{
    protected $commentPath;
    public  function __construct()
    {
        parent::__construct();
        $this->Action=M('action');
		$this->UserInfo=M('user');
		$this->Media=M('media');
    }
	/*从数据库中选出对应的用户信息，对应main页面的me页面*/
	public function loadMessage($userID){
		$data['posterID']=$userID;
		/*选出action目标对象是登录用户，但是操作用用户却不是登录用户的消息*/
		//加载信息包括自己对自己的操作
		/*$rs=$this->Action->join('user ON user.id=action.fromUserID')->join('media ON media.id=action.toMediaID')->where('posterID="'.$userID.'" and user.id <>"'.$userID.'"')->field('mediaType,toMediaID,headImgSrc,nickname,img1,actionType,actionTime')->select();*/
		//不包括自己对自己的操作
		$rs=$this->Action->join('user ON user.id=action.fromUserID')->join('media ON media.id=action.toMediaID')->where($data)->field('mediaType,toMediaID,headImgSrc,nickname,img1,actionType,actionTime')->select();	
		/*$rs=array_merge($rs1,$rs2);*/
        return $rs;
    }
	
	
	public function loadCommentInfo($essayID){
		$data['toMediaID']=$essayID;
		$data['actionType']=2;
		$rs=$this->Action->join('user ON user.id=action.fromUserID')->field('toMediaID,user.id,headImgSrc,nickname,content,actionTime')->where($data)->select();
        return $rs;
    }
	
	public function pushComment($essayID,$username,$content,$commentTime){
		$userInfo=$this->UserInfo->where('username="'.$username.'"')->field('id,nickname,headImgSrc')->select();
		$data['toMediaID']=$essayID;
		$data['fromUserID']=$userInfo[0]["id"];
		$data['content']=$content;
		$data['actionTime']=$commentTime;
		$data['actionType']=2;
		/*注意给数据库传送字段的时候，字符串的都需要加上双引号，负责会出现数据库字段不存在错误*/
		$rs	=	$this->Action->add($data);
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $userInfo;
    }
	
	/*点赞功能的实现*/
	public function thumbup($mediaID,$userID,$thumbupTime,$thumbupNum){
    	$data['toMediaID'] = $mediaID;
    	$data['fromUserID'] = $userID;
		$data['actionTime'] = $thumbupTime;
		$data['actionType'] = 0;
		
		$data1["thumbupNum"]=$thumbupNum;
		/*将点赞数目存入对应数据库*/
		$rs1= $this->Media->where('id='.$mediaID)->save($data1);
		$rs	= $this->Action->add($data);
        return $rs;
    }

	/*点赞功能的实现*/
	public function collect($mediaID,$userID,$collectTime,$collectNum){
    	$data['toMediaID'] = $mediaID;
    	$data['fromUserID'] = $userID;
		$data['actionTime'] = $collectTime;
		$data['actionType'] = 1;
		$data1["collectionNum"]=$collectNum;
		/*if ($this -> Shopcart -> where($data) -> find()) {
			$rs = "repeat";
		} else {
			$rs = $this -> Shopcart -> add($data);
		}*/
		$rs1= $this->Media->where('id='.$mediaID)->save($data1);
		$rs	= $this->Action->add($data);
        return $rs;
    }

	
	 public function loadMyCollection($userID){
    	$data['fromUserID'] = $userID;
		$data['actionType'] = 1;
		/*返回被操作的id*/
		$rs=$this->Action->join("media ON media.id=action.toMediaID")->field('img1,mediaType,id')->where($data)->select();
        /*return json_encode($rs);*/
        return $rs;
    }
	 
	public function deleteMyCollection($userID, $mediaID) {
		$data['toMediaID'] = $mediaID;
		$data['fromUserID'] = $userID;
		$rs = $this -> Action -> where($data) -> delete();
		return $rs;
	}
}
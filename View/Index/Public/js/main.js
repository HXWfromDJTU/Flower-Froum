$(document).on('click','.create-actions', function () {
      var buttons1 = [
        {
          text: '请选择发表的媒体类型',
          label: true
        },
        {
          text: '图片',
          bold: true,
          onClick: function() {
            window.location.href="http://localhost/hyltxt/index.php/Index/post-page.html?mediaType=0";
          }
        },
        {
          text: '文章',
          onClick: function() {	
            window.location.href="http://localhost/hyltxt/index.php/Index/post-page.html?mediaType=1";
          }
        }
        , {
          text: '视频',
          onClick: function() {
            window.location.href="http://localhost/hyltxt/index.php/Index/post-page.html?mediaType=2";
          }
        }
      ];
      var buttons2 = [
        {
          text: '取消',
          bg: 'danger'
        }
      ];
      var groups = [buttons1, buttons2];
      $.actions(groups);
  }); 
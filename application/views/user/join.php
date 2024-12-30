<div class="container p-5">

    <!-- 요청을 하면 localhost:8080/join POST로 요청됨
    username=사용자입력값&password=사용자값&email=사용자입력값 -->

    <div class="card">
        <div class="card-header"><b>회원가입을 해주세요</b></div>
        <div class="card-body">
            <form action="/join" method="post" enctype="application/x-www-form-urlencoded">
                <div class=" mb-3">
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                    <span id="usernameMessage" style="color: red;"></span><br>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Enter password" name="password">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                </div>
                <button type="submit" class="btn btn-primary form-control">회원가입</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#username').on('keyup', function (){
            const username = $(this).val();


            $.ajax({
                url: '<?= base_url('user/check_username')?>', 
                type:'POST', //HTTP 타입
                data:{username: username},
                dataType:'json',
                success:function (response) {
                    if(response.status) {
                        $('#usernameMessage').css('color', 'green').text(response.message);
                    }else{
                        $('#usernameMessage').css('color', 'red').text(response.message);
                    }
                },
                error: function(){
                    $('#usernameMessage').css('color', 'red').text('서버와 통신에 실패했습니다.');
                }
            })
        })
    })
</script>
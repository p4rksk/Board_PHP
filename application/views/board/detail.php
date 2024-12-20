<div class="container p-5">

    <!-- 수정삭제버튼 -->
    <div class="d-flex justify-content-end">
        <button class="btn btn-warning me-1">수정</button>
        <button class="btn btn-danger">삭제</button>
    </div>
    <div class="d-flex justify-content-end">
        <b>작성자</b> : ssar
    </div>

    <!-- 게시글내용 -->
    <div>
        <h2><b>제목자리</b></h2>
        <hr />
        <div class="m-4 p-2">
            내용입니다
        </div>
    </div>

    <!-- 댓글 -->
    <div class="card mt-3">
        <!-- 댓글등록 -->
        <div class="card-body">
            <form action="/reply/save" method="post">
                <textarea class="form-control" rows="2" name="comment"></textarea>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-primary mt-1">댓글등록</button>
                </div>
            </form>
        </div>

        <!-- 댓글목록 -->
        <div class="card-footer">
            <b>댓글리스트</b>
        </div>
        <div class="list-group">
            <!-- 댓글아이템 -->
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="px-1 me-1 bg-primary text-white rounded">cos</div>
                    <div>댓글 내용입니다</div>
                </div>
                <form action="/reply/1/delete" method="post">
                    <button class="btn">🗑</button>
                </form>
            </div>
            <!-- 댓글아이템 -->
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="px-1 me-1 bg-primary text-white rounded">ssar</div>
                    <div>댓글 내용입니다</div>
                </div>
                <form action="/reply/1/delete" method="post">
                    <button class="btn">🗑</button>
                </form>
            </div>
        </div>
    </div>
</div>

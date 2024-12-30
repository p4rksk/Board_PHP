<div class="container p-5">

    <!-- 수정삭제버튼 -->
    <div class="d-flex justify-content-end">
        <a href="<?= base_url('board/update_form/'.$board['boardId']);?>" class="btn btn-warning me-1" >수정</a>
        <form action="<?= base_url('/board/delete/'.$board['boardId'])?>">
        <button class="btn btn-danger">삭제</button>
        </form>
    </div>
    <div class="d-flex justify-content-end">
        <b>작성자</b> : <?= $board['username']?>
    </div>

    <!-- 게시글내용 -->
    <div>
        <h2><b><?= $board['title']?></b></h2>
        <hr />
        <div class="m-4 p-2">
            <?= $board['content']?>
        </div>
    </div>
</div>

<div class="container p-5">
    <div class="card">
        <div class="card-header"><b>글 쓰기 화면입니다</b></div>
        <div class="card-body">
            <form action="<?= base_url('board/write')?>" method="post" enctype="application/x-www-form-urlencoded">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="5" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-primary form-control">글 쓰기 완료</button>
            </form>
        </div>
    </div>
</div>
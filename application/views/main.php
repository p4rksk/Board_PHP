<div class="container p-5">
    <div class="d-flex justify-content-end">
        <form class="d-flex mb-2" action="/" method="get">
            <input class="form-control me-2" type="text" name="keyword" placeholder="Search..." required>
            <button class="btn btn-primary">검색</button>
        </form>
    </div>

        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title mb-3">제목</h4>
                <a href="<?= base_url('board/detail_form'); ?>" class="btn btn-primary">상세보기</a>
            </div>
        </div>
    


    <ul class="pagination d-flex justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="?page= &keyword=">Previous</a></li>
        <li class="page-item disabled"><a class="page-link" href="?page= &keyword=">Next</a></li>
    </ul>

</div>
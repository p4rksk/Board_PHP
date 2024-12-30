<div class="container p-5">
    <class="d-flex justify-content-end>
        <?php if ($this->session->userdata('logged_in')):?>
        <span><?= $this->session->userdata('username');?> 환영합니다.</span>
        <?php else:?>
            <span> 로그인 해주세요</span>
        <?php endif?>
        <form class="d-flex mb-2" action="/" method="get">
            <input class="form-control me-2" type="text" name="keyword" placeholder="Search..." required>
            <button class="btn btn-primary">검색</button>
        </form>
    </clas>
    </div>
   

    <table class="table table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th>번호</th>
                <th>글쓴이</th>
                <th>제목</th>
                <th>등록일</th>
            </tr>
            </thead>
        <tbody>
            <?php foreach ($boards as $board): ?>
            <tr>
              
                <td class="ml-2"><?= $board['boardId'] ?></td>
                <td><?= $board['username'] ?></td>
                <td><a href="<?= base_url('board/detail_form/'.$board['boardId']); ?>" style="cursor:pointer"><?= $board['title'] ?></a></td>
                <td><?= $board['write_date'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

        </table>
    


    <ul class="pagination d-flex justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="?page= &keyword=">Previous</a></li>
        <li class="page-item disabled"><a class="page-link" href="?page= &keyword=">Next</a></li>
    </ul>

</div>
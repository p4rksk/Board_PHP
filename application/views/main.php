<div class="container p-5">
    <div class="d-flex justify-content-end">
        <form class="d-flex mb-2" action="/" method="get">
            <input class="form-control me-2" type="text" name="keyword" placeholder="Search..." required>
            <button class="btn btn-primary">검색</button>
        </form>
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
                <td class="ml-2"><?= $board['id'] ?></td>
                <td><?= $board['author'] ?></td>
                <td><a href="<?= base_url('board/detail_form'); ?>" style="cursor:pointer"><?= $board['title'] ?></a></td>
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
<div class="col-3">
    <ul class="list-group">
        <a href="{{ url('/mypage') }}" class="text-decoration-none"><li class="list-group-item text-dark white">マイページ</li></a>
        <a href="{{ url('/mypage/like') }}" class="text-decoration-none"><li class="list-group-item text-dark white">いいね！一覧</li></a>
        <a href="{{ url('/sell') }}" class="text-decoration-none"><li class="list-group-item text-dark white">出品する</li></a>
        <a href="{{ url('/mypage/sell/now') }}" class="text-decoration-none"><li class="list-group-item text-dark white">出品 - 出品中</li></a>
        <a href="{{ url('/mypage/sell/trade') }}" class="text-decoration-none"><li class="list-group-item text-dark white">出品 - 取引中</li></a>
        <a href="{{ url('/mypage/sell/end') }}" class="text-decoration-none"><li class="list-group-item text-dark white">出品 - 売却済み</li></a>
        <a href="{{ url('/mypage/bid/now') }}" class="text-decoration-none"><li class="list-group-item text-dark white">落札 - 参加可能</li></a>
        <a href="{{ url('/mypage/bid/trade') }}" class="text-decoration-none"><li class="list-group-item text-dark white">落札 - 取引中</li></a>
        <a href="{{ url('/mypage/bid/end') }}" class="text-decoration-none mb-5"><li class="list-group-item text-dark white">落札 - 落札済み</li></a>

        <li class="font-weight-bold h5 mt-5 list-unstyled">設定</li>
        <a href="{{ url('/profile') }}" class="text-decoration-none"><li class="list-group-item text-dark white">プロフィール</li></a>
        <a href="{{ url('/profile/send') }}" class="text-decoration-none"><li class="list-group-item text-dark white">発送元・お届け先住所</li></a>
        <a href="{{ url('/profile/pay') }}" class="text-decoration-none"><li class="list-group-item text-dark white">支払い方法</li></a>
        <a href="{{ url('/profile/mail') }}" class="text-decoration-none"><li class="list-group-item text-dark white">メール</li></a>
        <a href="{{ url('/profile/logout') }}" class="text-decoration-none"><li class="list-group-item text-dark white">ログアウト</li></a>
    </ul>
</div>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
</head>
<body>
  <h1>お問い合わせ</h1>
    <div class="form">
      <form action="{{ route('contact.create') }}" method="post">
        @csrf
        <div>
          <label for="contact-name">お名前</label>
          <span>255文字まで</span>
          <input type="text" name='name'></input>
        </div>
        <div>
          <label for="contact-email">メールアドレス</label>
          <span>255文字まで</span>
          <input type="text" name='email'></input>
        </div>
        <div>
          <label for="contact-content">お問い合わせ内容</label>
          <span>1000文字まで</span>
          <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <button type='submit'>送信</button>
      </form>
    </div>
  <h1>お問い合わせ内容一覧</h1>
  @foreach($contacts as $contact)
    <p>{{ $contact->name}}</p>
    <p>{{ $contact->email}}</p>
    <p>{{ $contact->content}}</p>
  @endforeach
</body>
</html>

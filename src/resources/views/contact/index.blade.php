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
        @if(count($errors))
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        @endif
        <div>
          <label for="contact-department">お問い合わせ部署</label>
          <select name="department_id" id="department_id">
            @foreach($departments as $department)
              <option value={{ $department->id }}>{{ $department->name }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label for="contact-name">お名前<span>(255文字まで)</span></label>
          <p><input type="text" name='name'></input></p>
        </div>
        <div>
          <p><label for="contact-email">メールアドレス<span>(255文字まで)</span></label></p>
          <p><input type="text" name='email'></input></p>
        </div>
        <div>
          <p><label for="contact-content">お問い合わせ内容<span>(1000文字まで)</span></label></p>
          <p><textarea name="content" id="content" cols="30" rows="10"></textarea></p>
        </div>
        <div>
          <p><label for="contact-age">年齢</label></p>
          <p><input name='age'></input></p>
        </div>
        <div>
          <p><label for="contact-gender">性別</label></p>
          <select name='gender'>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">未選択</option>
          </select>
        </div>
        <p><button type='submit'>送信</button></p>
      </form>
    </div>
  <h1>お問い合わせ内容一覧</h1>
  <table class="table table-striped", border="1">
  <thead>
    <tr>
      <th>問い合わせ部署</th>
      <th>氏名</th>
      <th>メールアドレス</th>
      <th>年齢</th>
      <th>性別</th>
      <th>お問い合わせ内容</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contacts as $contact)
    <tr>
      <td>{{ $contact->department->name}}</td>
      <td>{{ $contact->name}}</td>
      <td>{{ $contact->age}}</td>
      <td>{{ $contact->gender_label}}</td>
      <td>{{ $contact->email}}</td>
      <td>{{ $contact->content}}</td>
    </tr>
  @endforeach
  </tbody>
</body>
</html>

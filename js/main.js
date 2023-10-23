
  $(document).ready(function() {
            $('.form').submit(function(event) {
                var myoji = $('#myoji').val();
                var name = $('#name').val();
                var email = $('#email').val();
                var tel = $('#tel').val();

                // 必須フィールドのチェック
                if (myoji === '' || name === '' || email === '' || tel === '') {
                    event.preventDefault();
                    alert('必須項目を入力してください。');
                }
            });
        });
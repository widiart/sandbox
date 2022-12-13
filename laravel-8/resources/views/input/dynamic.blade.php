<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic Input</title>
</head>
<body>
    <form method="POST" action="/input/dynamic">
        @csrf
        <input type="hidden" id="total" value=1>
        <div id="form">
            <div class="form-group">
                <label for="input">Input 1</label>
                <input id="input_1" type="text" name="input[]">
                <button type="button" onclick="hapus(1)"> Hapus </button>
            </div>
        </div>
        <div>
            <button type="button" onclick="tambah()"> Tambah </button>
        </div>
        <button type="submit" name="submit" value="input"> Simpan </button>
    </form>
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
    <script>
        var total = $("#total").val()
        function tambah() {
            total++;
            $("#form").append(`
                <div class="form-group">
                    <label for="input">Input ${total}</label>
                    <input id="input_${total}" type="text" name="input[]">
                    <button type="button" onclick="hapus(${total})"> Hapus </button>
                </div>
            `)
        }

        function hapus(id) {
            console.log($(document).find(`#input_${id}`).parent('div').html());
            $(document).find(`#input_${id}`).parent('div').remove();
        }
    </script>
</body>
</html>
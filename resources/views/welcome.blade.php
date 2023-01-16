<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<x-form action="{{route('post.form')}}" class="m-5">
    <x-label class="form-label" for="first_name">First Name</x-label>
    <x-input class="form-control" name="first_name"></x-input>
    <x-form-error name="first_name" />
    <x-label class="form-label" for="comments">Comments</x-label>
    <x-textarea class="form-control" name="about"></x-textarea>
    <x-form-error name="about" />
    <x-label class="form-label" for="remember_me">Checkbox</x-label>
    <x-checkbox name="remember_me" />
    <x-label class="form-label" for="tier">Radio Buttons</x-label>
    <x-radio name="tier" id="tier_1" value="tier_1"></x-radio>
    <x-radio name="tier" id="tier_2" value="tier_2"></x-radio>
    <x-label class="form-label" for="avatar">File Upload</x-label>
    <x-file-upload class="form-control" name="avatar"></x-file-upload>
</x-form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>

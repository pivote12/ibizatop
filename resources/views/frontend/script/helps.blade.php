@section('other-script')
<script>
$('.sendProfile').on('click', function(e) {
    e.preventDefault();
    $(this).siblings('button').click();
});
</script>
@endsection
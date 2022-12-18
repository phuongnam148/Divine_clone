<p class="h4 text-center my-2">Thêm danh mục sản phẩm</p>

<table class="table table-bordered">
    <form method="POST" action="modules/quanlydanhmuc/xuly.php">
        <tr>
            <td>Tên danh mục</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="tendanhmuc" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="thutu" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Icon danh mục</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="icon" style="width: 100%;"></td>
        </tr>
        <tr>
            <td colspan="2"><input class="btn btn-primary" type="submit" name="themdanhmuc" value="Thêm danh mục" ></td>
        </tr>
    </form>
</table>
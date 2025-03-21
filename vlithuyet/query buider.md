## Các hàm thường dùng

```php
$query->get();                                                  // lấy toàn bộ dữ liệu
$query->first();                                                // lấy bản ghi đầu tiên
$query->find();                                                 // tìm theo id
$query->value('fieldName');                                     // lấy giá trị của cột
$query->pluck('fieldName');                                     // lấy giá trị và trả về một mảng
$query->max('fieldName');                                       // lấy giá trị lớn nhất 
$query->min('fieldName');                                       // lấy giá trị nhỏ nhất
$query->sum('fieldName');                                       //
$query->avg('fieldName');                                       //
$query->count('fieldName');                                     //
$query->select('fieldName', 'fieldName as shortFieldName');     // lấy một trường dữ liệu
$query->distinct();                                             // loại bỏ dữ liệu trùm
```

## Truy vấn điều kiện

```php
$query->where('fieldName', 'value');  // =, <=, >=, <, >
$query->where('fieldName', 'value')->orWhere('fieldName', 'value');
$query->where('fieldName', 'like' ,'%value%');
$query->whereBetween('fieldName', [1, 100]);
$query->whereNotBetween('votes', [1, 100]);
$query->whereIn('fieldName', array);
$query->orderBy('fieldName', asc|desc);  // default: asc (tăng dần)
$query->offset(number);
$query->limit(number);
```

## Thêm, Sửa, Xóa

```php
$query->insert([
    'key' => 'value',
    'key' => 'value'
]);

$query->where('fieldName', 'value')->update([
    'key' => 'valueUpdate',
    'key' => 'valueUpdate'
]);

$query->where('fieldName', 'value')->delete();
```

## Bài tập

1. Lấy danh sách toàn bộ user
2. Lấy thông tin user có id = 4
3. Lấy thuộc tính 'name' của user có id = 16
4. Lấy danh sách id của phòng ban 'Ban giám hiệu'
5. Tìm user có độ tuổi lớn nhất trong công ty
6. Tìm user có độ tuổi nhỏ nhất trong công ty
7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user
8. Lấy danh sách tuổi các user
9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
13. Thêm một user mới vào công ty
14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo'
15. Xóa user nghỉ quá 15 ngày

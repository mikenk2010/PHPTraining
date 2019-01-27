# PHPTraining
## Bài tập 1:
Viết một trang nhập liệu và hiển thị nội dung.
1. Page 1: Home page, liệt kê index (Layout: https://i.imgur.com/Mjl62hP.png)
2. Page 2: Add new item (form nhập liệu)
3 Page 3: View Item (html text, miễn sao render được nội dung lên là được)
4. Page 4: Update item (cập nhận dữ liệu theo đúng item)
5. Page 5: Delete (qua trang delete, bấm nút delete thì delete item)

Note: Kết nối DB, cập nhật, thêm dữ liệu dzo Mysql

Fields: 
- First name (text field), 
- Last Name (text field), 
- Gender (Select), 
- Address (Text Area), 
- DoB (Select list)
- Status (Bool)
- CreatedDate (Datetime)

## Bài tập 2: 
1. Tạo một tài khoản trên github.com 
2. Push project của mình lên đó, học dùng git, cách commit, cách add repo etc. 
3. Làm thêm một table gọi là Roles, table dùng để gán quyền cho các User
 4. Làm một trang quản lý Role và quản lý User đang có role nào, quyền gì. 
5. Khi tạo Employee thì gán Roles cho User này. 
6. Ở trang quản lý Employee, nút Delete, chuyển thành Ajax button, khi bấm thì lên popup rồi delete Record đó. 
Roles: ID (int) RoleName (Varchar 50) AllowAdd (Bool) AllowEdit (Bool) AllowView (Bool) AllowDelete (Bool) 
RoleMapping: ID (int) EmployeeId (Int) - Ref tới table Employee ở bài trước RoleId (Int) - Ref tới table Roles

## Bài tập 3 : 
làm bài tập 2 theo framwork Codeigniter

## Bài tập 4: Rest API
Em viết thêm 1 controller trong CI để expose tất cả ra Rest API (JSON format)

Rồi dùng jquery $.ajax để handle các action.

- Index load bằng ajax
- Add new: hiện popup form, khi add thì tự trong cái table index thêm cột luôn, ko cần refresh page.
- Edit/Delete dủng hiện popup form: khi edit, delete thì page index tự update luôn, ko refresh.

Tất cả xử lý bằng Ajax hết, ko dùng các server request nữa.

Popup form giống như vậy https://i.imgur.com/NnsOv9W.png

Có Blur background để các action thay đổi ở page index.

## Bài tập 5:
 - Thêm chức năng Send email, gửi email tới cho user sau khi tạo record, trong email có 1 activation link, khi click dzo link này thì update status của user. - Thêm chức năng export PDF, export user data ra PDF file.

##  Bài tập 6: 
- CHuyển chức năng của bt 5 thành Ajax. 

## Bài tập 7: 
- Deploy project lên AWS, để a tạo cho e account, rồi ssh key, rồi e access và upload project của mình lên đó

# Basic PHP & Member Management System

โฟลเดอร์สำหรับทบทวนความรู้พื้นฐานภาษา PHP และตัวอย่างระบบจัดการสมาชิก (Member Database CRUD & Authentication)

---

## 📂 โครงสร้างโปรเจกต์ (Project Structure)

```text
basic_php/
├── array.php             # การใช้งานอาเรย์ (Arrays) ใน PHP
├── date.php              # การจัดการเวลาและวันที่ (Date & Time)
├── operator.php          # ตัวดำเนินการประเภทต่าง ๆ (Operators)
├── php_function.php      # การสร้างและเรียกใช้ฟังก์ชัน (Functions)
├── session1.php          # การเริ่มต้นและเก็บค่า Session
├── session2.php          # การเข้าถึงและแสดงผลข้อมูลจาก Session
├── session_destroy.php   # การลบ/ทำลาย Session (Logout)
└── form/                 # ระบบจัดการสมาชิกแบบ CRUD เชื่อมต่อฐานข้อมูล
    ├── config.inc.php    # การตั้งค่าเชื่อมต่อฐานข้อมูล MySQL
    ├── index.php         # หน้าหลักหลังเข้าสู่ระบบ (Dashboard)
    ├── login.php         # หน้าเข้าสู่ระบบ (Login Form UI)
    ├── logout.php        # ออกจากระบบ
    ├── chklogin.php      # ตรวจสอบความถูกต้องของสิทธิ์ (Authentication Process)
    ├── frmRegister.php   # ฟอร์มลงทะเบียนสมาชิกใหม่
    ├── insert.php        # ประมวลผลการบันทึกสมาชิกใหม่
    ├── listmember.php    # หน้ารายชื่อสมาชิกทั้งหมด (Read)
    ├── frmEditMember.php # ฟอร์มแก้ไขข้อมูลสมาชิก (Update Form UI)
    ├── update.php        # ประมวลผลการบันทึกแก้ไขข้อมูล
    └── delMember.php     # ประมวลผลการลบสมาชิก (Delete)
```

---

## 🚀 รายละเอียดระบบย่อย

1. **PHP Syntax & Concepts**
   - ศึกษาพื้นฐานตัวดำเนินการ ลูป วันที่ ฟังก์ชัน และการส่งผ่านค่าข้ามหน้าระหว่างไฟล์โดยใช้ Session (`session1.php` -> `session2.php`)
2. **Member CRUD Form (`form/`)**
   - **Create**: สมัครสมาชิกพร้อมบันทึกลงใน Database
   - **Read**: แสดงตารางข้อมูลสมาชิกทั้งหมด พร้อมตัวเลือกในการแก้ไขหรือลบ
   - **Update**: แก้ไขรายละเอียดข้อมูลของสมาชิกรายบุคคล
   - **Delete**: ลบรายชื่อสมาชิกออกจากฐานข้อมูล
   - **Session-Based Auth**: ปกป้องหน้า Dashboard ด้วยระบบสิทธิ์การเข้าสู่ระบบ

---

## 🛠️ ความต้องการของระบบ (System Requirements)

- **Web Server**: Apache / Nginx (เช่น XAMPP, Laragon, MAMP)
- **PHP Version**: 7.4 ขึ้นไป หรือ 8.x
- **Database**: MySQL / MariaDB
- จัดเตรียมตารางฐานข้อมูลและตั้งค่าการเชื่อมต่อใน [config.inc.php](form/config.inc.php) ก่อนการเปิดรันจริง

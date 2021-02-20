<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AddTracks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//khoa-ChiDan
        DB::table('tracks')->insert([
            'nameTrack' => '1234_Chi Dân',
            'Lyric' =>'upload/lyric/1234_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/1234_ChiDan.mp3',
            'urlImages'=>'upload/images/1234_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Anh Không Sao Đâu_Chi Dân',
            'Lyric' =>'upload/lyric/AnhKhongSaoDau_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/AnhKhongSaoDau_ChiDan.mp3',
            'urlImages'=>'upload/images/AnhKhongSaoDau_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Chỉ Cần Anh Giả Vờ _ Chi Dân',
            'Lyric' =>'upload/lyric/ChiCanAnhGiaVo_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/ChiCanAnhGiaVo_ChiDan.mp3',
            'urlImages'=>'upload/images/ChiCanAnhGiaVo_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Có Dược Không Em_ Chi Dân',
            'Lyric' =>'upload/lyric/CoDuocKhongEm_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/CoDuocKhongEm_ChiDan.mp3',
            'urlImages'=>'upload/images/CoDuocKhongEm_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Điều Anh Biết_Chi Dân',
            'Lyric' =>'upload/lyric/DieuAnhBiet_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/DieuAnhBiet_ChiDan.mp3',
            'urlImages'=>'upload/images/DieuAnhBiet_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Không Quan Tâm_Chi Dân',
            'Lyric' =>'upload/lyric/KhongQuanTam_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/KhongQuanTam_ChiDan.mp3',
            'urlImages'=>'upload/images/KhongQuanTam_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Làm Vợ Anh Nhé_Chi Dân',
            'Lyric' =>'upload/lyric/LamVoAnhNhe_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/LamVoAnhNhe_ChiDan.mp3',
            'urlImages'=>'upload/images/LamVoAnhNhe_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Người Tôi Yêu_Chi Dân',
            'Lyric' =>'upload/lyric/NguoiToiYeu_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/NguoiToiYeu_ChiDan.mp3',
            'urlImages'=>'upload/images/NguoiToiYeu_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Sự Thật Sau Một Lời Hứa_Chi Dân',
            'Lyric' =>'upload/lyric/SuThatSauMotLoiHua_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/SuThatSauMotLoiHua_ChiDan.mp3',
            'urlImages'=>'upload/images/SuThatSauMotLoiHua_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Tìm Em Trong Mơ_Chi Dân',
            'Lyric' =>'upload/lyric/TimEmTrongMo_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/TimEmTrongMo_ChiDan.mp3',
            'urlImages'=>'upload/images/TimEmTrongMo_ChiDan.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);
        //khoa-DatG
        DB::table('tracks')->insert([
            'nameTrack' => 'Buồn Của Anh _ K-ICM_ Đạt G_ Masew',
            'Lyric' =>'upload/lyric/BuonCuaAnh_K-ICM_DatG,Masew.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/BuonCuaAnh_K-ICM_DatG,Masew.mp3',
            'urlImages'=>'upload/images/BuonCuaAnh_K-ICM_DatG,Masew.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Bánh Mì Không _ Đạt G_ Du Uyen',
            'Lyric' =>'upload/lyric/BanhMiKhong_DatG_DuUyen.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/BanhMiKhong_DatG_DuUyen.mp3',
            'urlImages'=>'upload/images/BanhMiKhong_DatG_DuUyen.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Anh Ơi Ở Lại _ ĐạtG _ Chi Pu',
            'Lyric' =>'upload/lyric/TimEmTrongAnhOiOLai_ChiPu_DatGMo_ChiDan.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/AnhOiOLai_ChiPu_DatG.mp3',
            'urlImages'=>'upload/images/AnhOiOLai_ChiPu_DatG.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Buồn Không Em _ ĐạtG',
            'Lyric' =>'upload/lyric/BuonKhongEm_DatG.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/BuonKhongEm_DatG.mp3',
            'urlImages'=>'upload/images/BuonKhongEm_DatG.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Chỉ Khi Anh Một Mình _ ĐạtG _ Vũ Duy Khánh',
            'Lyric' =>'upload/lyric/ChiKhiAnhMotMinh_DatG_VũDuyKhanh.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/ChiKhiAnhMotMinh_DatG_VũDuyKhanh.mp3',
            'urlImages'=>'upload/images/ChiKhiAnhMotMinh_DatG_VũDuyKhanh.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Về _ ĐạtG _ Du Uyen_ BeeBB',
            'Lyric' =>'upload/lyric/Ve_DatG_ DuUyen_BeeBB.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/Ve_DatG_ DuUyen_BeeBB.mp3',
            'urlImages'=>'upload/images/Ve_DatG_ DuUyen_BeeBB.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Có Như Không _ ĐạtG _ Hiền Hồ',
            'Lyric' =>'upload/lyric/CoNhuKhongCo_DatG_HienHo.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/CoNhuKhongCo_DatG_HienHo.mp3',
            'urlImages'=>'upload/images/CoNhuKhongCo_DatG_HienHo.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Đô Trưởng _ ĐạtG',
            'Lyric' =>'upload/lyric/DoTruong_DatG.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/DoTruong_DatG.mp3',
            'urlImages'=>'upload/images/DoTruong_DatG.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Những Lo Âu Ấy _ ĐạtG _ Du Uyen',
            'Lyric' =>'upload/lyric/NhungLoAuAy_DatG_DuUyen.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/NhungLoAuAy_DatG_DuUyen.mp3',
            'urlImages'=>'upload/images/NhungLoAuAy_DatG_DuUyen.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Thêm Bao Nhiêu Lâu _ ĐạtG ',
            'Lyric' =>'upload/lyric/ThemBaoNhieuLau_DatG.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/ThemBaoNhieuLau_DatG.mp3',
            'urlImages'=>'upload/images/ThemBaoNhieuLau_DatG.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);
        //khoa-HoaMinZy
        DB::table('tracks')->insert([
            'nameTrack' => 'Cứ Yêu Đi (100 Ngày Bên Em)_ Hòa Minzy_ Đức Phúc',
            'Lyric' =>'upload/lyric/CuYeuDi(100NgayBenEmOST)_HoaMinZy_DucPhuc.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/CuYeuDi(100NgayBenEmOST)_HoaMinZy_DucPhuc.mp3',
            'urlImages'=>'upload/images/CuYeuDi(100NgayBenEmOST)_HoaMinZy_DucPhuc.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Đi Để trở Về_ Hòa Minzy_ Nhiều Ca Sĩ',
            'Lyric' =>'upload/lyric/DiDeTroVe_HoaMinZy_NhieuCaSi.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/DiDeTroVe_HoaMinZy_NhieuCaSi.mp3',
            'urlImages'=>'upload/images/DiDeTroVe_HoaMinZy_NhieuCaSi.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Vào Hạ_HoaMinZy_NhieuCaSi',
            'Lyric' =>'upload/lyric/VaoHa_HoaMinZy_NhieuCaSi.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/VaoHa_HoaMinZy_NhieuCaSi.mp3',
            'urlImages'=>'upload/images/VaoHa_HoaMinZy_NhieuCaSi.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Không Thể Cùng Nhau Di Hết Suốt Kiếp_ Hòa MinZy_ Mr.Siro',
            'Lyric' =>'upload/lyric/KhongTheCungNhauSuotKiep_HoaMinZy_MrSiRo.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/KhongTheCungNhauSuotKiep_HoaMinZy_MrSiRo.mp3',
            'urlImages'=>'upload/images/KhongTheCungNhauSuotKiep_HoaMinZy_MrSiRo.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'MAMA 2017 Mashup_DucPhuc_HoaMinZy_ERIK',
            'Lyric' =>'upload/lyric/MAMA2017Mashup_DucPhuc_HoaMinZy_ERIK.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/MAMA2017Mashup_DucPhuc_HoaMinZy_ERIK.mp3',
            'urlImages'=>'upload/images/MAMA2017Mashup_DucPhuc_HoaMinZy_ERIK.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Ngày Mai Nắng Lên Anh Sẽ Về_HoaMinZy_AnhTu_ XHTĐRLX ',
            'Lyric' =>'upload/lyric/NgayMaiNangLenAnhSeVe_HoaMinZy_AnhTu_ XHTĐRLX .txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/NgayMaiNangLenAnhSeVe_HoaMinZy_AnhTu_ XHTĐRLX .mp3',
            'urlImages'=>'upload/images/NgayMaiNangLenAnhSeVe_HoaMinZy_AnhTu_ XHTĐRLX .jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Nơi Tôi Thuộc Về_HoaMinZy_NhieuCaSi',
            'Lyric' =>'upload/lyric/NoiToiThuocVe_HoaMinZy_NhieuCaSi.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/NoiToiThuocVe_HoaMinZy_NhieuCaSi.mp3',
            'urlImages'=>'upload/images/NoiToiThuocVe_HoaMinZy_NhieuCaSi.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Tết Nhà Mình_HoaMinZy_LangLD ',
            'Lyric' =>'upload/lyric/TetNhaMinh_HoaMinZy_LangLD .txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/TetNhaMinh_HoaMinZy_LangLD .mp3',
            'urlImages'=>'upload/images/TetNhaMinh_HoaMinZy_LangLD .jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Thế Là Tết_HoaMinZy_DucPhuc',
            'Lyric' =>'upload/lyric/TheLaTet_HoaMinZy_DucPhuc.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/TheLaTet_HoaMinZy_DucPhuc.mp3',
            'urlImages'=>'upload/images/TheLaTet_HoaMinZy_DucPhuc.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Thu Cạn_HoaMinZy_XHTĐRLX ',
            'Lyric' =>'upload/lyric/ThuCan_HoaMinZy_XHTĐRLX .txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/ThuCan_HoaMinZy_XHTĐRLX .mp3',
            'urlImages'=>'upload/images/ThuCan_HoaMinZy_XHTĐRLX .jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);
        //khoa-MinhVuongM4U
        DB::table('tracks')->insert([
            'nameTrack' => 'Cuộc Sống Xa Nhà_MinhVuongM4U_ACV',
            'Lyric' =>'upload/lyric/CuocsongXaNha_MinhVuongM4U_ACV.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/CuocsongXaNha_MinhVuongM4U_ACV.mp3',
            'urlImages'=>'upload/images/CuocsongXaNha_MinhVuongM4U_ACV.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Cứ Vội Vàng_MinhVuongM4U_ACV',
            'Lyric' =>'upload/lyric/CuVoiVang_MinhVuongM4U_ACV.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/CuVoiVang_MinhVuongM4U_ACV.mp3',
            'urlImages'=>'upload/images/CuVoiVang_MinhVuongM4U_ACV.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Đi Cùng Em_MinhVuongM4u_Lemon Climb_ACV',
            'Lyric' =>'upload/lyric/DiCungEm_MinhVuongM4u_Lemon Climb_ACV.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/DiCungEm_MinhVuongM4u_Lemon Climb_ACV.mp3',
            'urlImages'=>'upload/images/DiCungEm_MinhVuongM4u_Lemon Climb_ACV.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Em Sẽ Là Cô Dâu_Minh Vương M4U_HuyCung',
            'Lyric' =>'upload/lyric/EmSeLaCoDau_MinhVươngM4U_HuyCung.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/EmSeLaCoDau_MinhVươngM4U_HuyCung.mp3',
            'urlImages'=>'upload/images/EmSeLaCoDau_MinhVươngM4U_HuyCung.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Hẹn Yêu_MinhVuongM4U_ThuongVo_ACV',
            'Lyric' =>'upload/lyric/HenYeu_MinhVuongM4U_ThuongVo_ACV.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/HenYeu_MinhVuongM4U_ThuongVo_ACV.mp3',
            'urlImages'=>'upload/images/HenYeu_MinhVuongM4U_ThuongVo_ACV.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Họa Khúc Tương Tư_MinhVuong_ThuongVo_ACV',
            'Lyric' =>'upload/lyric/HoaKhucTuongTu_MinhVuong_ThuongVo_ACV XHTĐRLX .txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/HoaKhucTuongTu_MinhVuong_ThuongVo_ACV XHTĐRLX .mp3',
            'urlImages'=>'upload/images/HoaKhucTuongTu_MinhVuong_ThuongVo_ACV XHTĐRLX .jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Nắm_MinhVuong_HuongLy',
            'Lyric' =>'upload/lyric/Nam_MinhVuong_HuongLy.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/Nam_MinhVuong_HuongLy.mp3',
            'urlImages'=>'upload/images/Nam_MinhVuong_HuongLy.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Nỗi Đau Ai Ngờ(Chỉ Là Câu Hứa)_MinhVuongM4U_ACV',
            'Lyric' =>'upload/lyric/NoiDauaiNgo(ChiLaCuaHua)_MinhVuongM4U_ACV.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/NoiDauaiNgo(ChiLaCuaHua)_MinhVuongM4U_ACV.mp3',
            'urlImages'=>'upload/images/NoiDauaiNgo(ChiLaCuaHua)_MinhVuongM4U_ACV.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Trúc Xinh_MinhVuongM4U_NhuViet_ACV',
            'Lyric' =>'upload/lyric/TrucXinh_MinhVuongM4U_NhuViet_ACV.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/TrucXinh_MinhVuongM4U_NhuViet_ACV.mp3',
            'urlImages'=>'upload/images/TrucXinh_MinhVuongM4U_NhuViet_ACV.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('tracks')->insert([
            'nameTrack' => 'Thê Tử_MinhVuongM4U_HuongLy',
            'Lyric' =>'upload/lyric/TheTu_MinhVuongM4U_HuongLy.txt',
            'urlMp3Low' => '',
            'urlMp3HighQty' => 'upload/tracks/TheTu_MinhVuongM4U_HuongLy.mp3',
            'urlImages'=>'upload/images/TheTu_MinhVuongM4U_HuongLy.jpg',
            'trangThai'=>'53',
            'View'=>'53',
            'Slug'=>'1',
            'Tags'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);
    }
}

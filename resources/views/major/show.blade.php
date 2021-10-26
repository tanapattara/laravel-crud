@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">{{ __('แสดงข้อมูลสาขาวิชา') }}</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="/major">
                        <button type="button" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                            ย้อนกลับ
                        </button>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('ข้อมูลสาขาวิชา') }}</div>

                <div class="card-body">

                    <div class="mb-3">
                        <label for="code" class="form-label">รหัสย่อ</label>
                        <input type="text" class="form-control" name="code" id="code"
                            placeholder="รหัสตัวย่อ เช่น CS, DS" value="{{ $major['code'] }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">คำอธิบาย</label>
                        <input type="text" class="form-control" name="description" id="description"
                            placeholder="ชื่อหลักสูตร หรือวิชาเอก" value="{{ $major['description'] }}" readonly>
                    </div>

                    <div class="text-right">
                        <a href="/major.edit/{{ $major['id']}}" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil" viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                            แก้ไข
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
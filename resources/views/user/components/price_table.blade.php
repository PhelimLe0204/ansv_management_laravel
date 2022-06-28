<table class="table table-hover table-bordered">
    <tr>
        <th style="width: 14%;" class="text-center">
            Kế hoạch
        </th>
        <th class="text-center">
            Số tiền<br />({{ $data->currency_unit }})
        </th>
        <th class="text-center" style="width: 17%;">
            Hợp đồng<br />(D / M / Y)
        </th>
        <th class="text-center" style="width: 17%;">
            Mục tiêu<br />(D / M / Y)
        </th>
        <th class="text-center" style="width: 17%;">
            Thực tế<br />(D / M / Y)
        </th>
        <th class="text-center" style="width: 9%;">
            Còn lại<br />(Ngày)
        </th>
    </tr>
    <tr class="text-center">
        <th>DAC</th>
        <td class="text-right">
            @if (!empty($data->so_tien_DAC))
                {{ number_format($data->so_tien_DAC,0,'','.') }}
            @endif
        </td>
        <td>
            @if(!empty($data->hop_dong_DAC))
                {{ date_format(date_create($data->hop_dong_DAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->muc_tieu_DAC))
                {{ date_format(date_create($data->muc_tieu_DAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->thuc_te_DAC))
                {{ date_format(date_create($data->thuc_te_DAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->cl_DAC) && $data->cl_DAC != '0')
                {!! $data->cl_DAC !!}
            @endif
        </td>
    </tr>
    <tr class="text-center">
        <th>PAC</th>
        <td class="text-right">
            @if (!empty($data->so_tien_PAC))
                {{ number_format($data->so_tien_PAC,0,'','.') }}
            @endif
        </td>
        <td>
            @if(!empty($data->hop_dong_PAC))
                {{ date_format(date_create($data->hop_dong_PAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->muc_tieu_PAC))
                {{ date_format(date_create($data->muc_tieu_PAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->thuc_te_PAC))
                {{ date_format(date_create($data->thuc_te_PAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->cl_PAC) && $data->cl_PAC != '0')
                {!! $data->cl_PAC !!}
            @endif
        </td>
    </tr>
    <tr class="text-center">
        <th>FAC</th>
        <td class="text-right">
            @if (!empty($data->so_tien_FAC))
                {{ number_format($data->so_tien_FAC,0,'','.') }}
            @endif
        </td>
        <td>
            @if(!empty($data->hop_dong_FAC))
                {{ date_format(date_create($data->hop_dong_FAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->muc_tieu_FAC))
                {{ date_format(date_create($data->muc_tieu_FAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->thuc_te_FAC))
                {{ date_format(date_create($data->thuc_te_FAC),'d/ m/ Y') }}
            @endif
        </td>
        <td>
            @if(!empty($data->cl_FAC) && $data->cl_FAC != '0')
                {!! $data->cl_FAC !!}
            @endif
        </td>
    </tr>
    <tr class="text-center">
        <th>Tổng</th>
        <td class="text-right">
            @if (!empty($data->tong_gia_tri_thuc_te))
                {{ number_format($data->tong_gia_tri_thuc_te,0,'','.') }}
            @endif
        </td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr class="text-center">
        <th>Tạm ứng</th>
        <td class="text-right">
            @if (!empty($data->so_tien_tam_ung))
                {{ number_format($data->so_tien_tam_ung,0,'','.') }}
            @endif
        </td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
</table>

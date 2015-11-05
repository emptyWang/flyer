<?php

namespace App\Http\Utilities;

class Country
{
    public static $countries = [
        'BT' => '不丹',
        'TL' => '东帝汶',
        'CN' => '中国',
        'MO' => '中国澳门特别行政区',
        'HK' => '中国香港特别行政区',
        'CF' => '中非共和国',
        'DK' => '丹麦',
        'UA' => '乌克兰',
        'UZ' => '乌兹别克斯坦',
        'UG' => '乌干达',
        'UY' => '乌拉圭',
        'TD' => '乍得',
        'YE' => '也门',
        'AM' => '亚美尼亚',
        'IL' => '以色列',
        'IQ' => '伊拉克',
        'IR' => '伊朗',
        'BZ' => '伯利兹',
        'CV' => '佛得角',
        'RU' => '俄罗斯',
        'BG' => '保加利亚',
        'HR' => '克罗地亚',
        'GU' => '关岛',
        'GM' => '冈比亚',
        'IS' => '冰岛',
        'GN' => '几内亚',
        'GW' => '几内亚比绍',
        'LI' => '列支敦士登',
        'CG' => '刚果（布）',
        'CD' => '刚果（金）',
        'LY' => '利比亚',
        'LR' => '利比里亚',
        'CA' => '加拿大',
        'GH' => '加纳',
        'GA' => '加蓬',
        'HU' => '匈牙利',
        'MP' => '北马里亚纳群岛',
        'GS' => '南乔治亚岛和南桑威齐群岛',
        'AQ' => '南极洲',
        'ZA' => '南非',
        'BW' => '博茨瓦纳',
        'QA' => '卡塔尔',
        'RW' => '卢旺达',
        'LU' => '卢森堡',
        'IN' => '印度',
        'ID' => '印度尼西亚',
        'GT' => '危地马拉',
        'EC' => '厄瓜多尔',
        'ER' => '厄立特里亚',
        'SY' => '叙利亚',
        'CU' => '古巴',
        'TW' => '台湾',
        'KG' => '吉尔吉斯斯坦',
        'DJ' => '吉布提',
        'KZ' => '哈萨克斯坦',
        'CO' => '哥伦比亚',
        'CR' => '哥斯达黎加',
        'CM' => '喀麦隆',
        'TV' => '图瓦卢',
        'TM' => '土库曼斯坦',
        'TR' => '土耳其',
        'LC' => '圣卢西亚',
        'KN' => '圣基茨和尼维斯',
        'ST' => '圣多美和普林西比',
        'BL' => '圣巴泰勒米',
        'VC' => '圣文森特和格林纳丁斯',
        'PM' => '圣皮埃尔和密克隆',
        'CX' => '圣诞岛',
        'SH' => '圣赫勒拿',
        'MF' => '圣马丁',
        'SM' => '圣马力诺',
        'GY' => '圭亚那',
        'TZ' => '坦桑尼亚',
        'EG' => '埃及',
        'ET' => '埃塞俄比亚',
        'KI' => '基里巴斯',
        'TJ' => '塔吉克斯坦',
        'SN' => '塞内加尔',
        'RS' => '塞尔维亚',
        'CS' => '塞尔维亚和黑山',
        'SL' => '塞拉利昂',
        'CY' => '塞浦路斯',
        'SC' => '塞舌尔群岛',
        'MX' => '墨西哥',
        'TG' => '多哥',
        'DM' => '多米尼加',
        'DO' => '多米尼加共和国',
        'AX' => '奥兰群岛',
        'AT' => '奥地利',
        'VE' => '委内瑞拉',
        'BD' => '孟加拉国',
        'AO' => '安哥拉',
        'AI' => '安圭拉',
        'AG' => '安提瓜和巴布达',
        'AD' => '安道尔',
        'FM' => '密克罗尼西亚联邦',
        'NI' => '尼加拉瓜',
        'NG' => '尼日利亚',
        'NE' => '尼日尔',
        'NP' => '尼泊尔',
        'PS' => '巴勒斯坦领土',
        'BS' => '巴哈马',
        'PK' => '巴基斯坦',
        'BB' => '巴巴多斯',
        'PG' => '巴布亚新几内亚',
        'PY' => '巴拉圭',
        'PA' => '巴拿马',
        'BH' => '巴林',
        'BR' => '巴西',
        'BF' => '布基纳法索',
        'BV' => '布维特岛',
        'BI' => '布隆迪',
        'GR' => '希腊',
        'PW' => '帕劳',
        'CK' => '库克群岛',
        'KY' => '开曼群岛',
        'DE' => '德国',
        'IT' => '意大利',
        'SB' => '所罗门群岛',
        'TK' => '托克劳',
        'LV' => '拉脱维亚',
        'NO' => '挪威',
        'CZ' => '捷克共和国',
        'MD' => '摩尔多瓦',
        'MA' => '摩洛哥',
        'MC' => '摩纳哥',
        'BN' => '文莱',
        'FJ' => '斐济',
        'SZ' => '斯威士兰',
        'SK' => '斯洛伐克',
        'SI' => '斯洛文尼亚',
        'SJ' => '斯瓦尔巴特和扬马延',
        'LK' => '斯里兰卡',
        'SG' => '新加坡',
        'NC' => '新喀里多尼亚',
        'NZ' => '新西兰',
        'JP' => '日本',
        'CL' => '智利',
        'IM' => '曼岛',
        'KP' => '朝鲜',
        'ZZ' => '未知或无效地区',
        'KH' => '柬埔寨',
        'GG' => '格恩西岛',
        'GD' => '格林纳达',
        'GL' => '格陵兰',
        'GE' => '格鲁吉亚',
        'VA' => '梵蒂冈',
        'BE' => '比利时',
        'MR' => '毛里塔尼亚',
        'MU' => '毛里求斯',
        'TO' => '汤加',
        'SA' => '沙特阿拉伯',
        'FR' => '法国',
        'TF' => '法属南部领土',
        'GF' => '法属圭亚那',
        'PF' => '法属波利尼西亚',
        'FO' => '法罗群岛',
        'PL' => '波兰',
        'PR' => '波多黎各',
        'BA' => '波斯尼亚和黑塞哥维那',
        'TH' => '泰国',
        'JE' => '泽西岛',
        'ZW' => '津巴布韦',
        'HN' => '洪都拉斯',
        'HT' => '海地',
        'AU' => '澳大利亚',
        'IE' => '爱尔兰',
        'EE' => '爱沙尼亚',
        'JM' => '牙买加',
        'TC' => '特克斯和凯科斯群岛',
        'TT' => '特立尼达和多巴哥',
        'BO' => '玻利维亚',
        'NR' => '瑙鲁',
        'SE' => '瑞典',
        'CH' => '瑞士',
        'GP' => '瓜德罗普岛',
        'WF' => '瓦利斯和富图纳',
        'VU' => '瓦努阿图',
        'RE' => '留尼汪',
        'BY' => '白俄罗斯',
        'BM' => '百慕大',
        'PN' => '皮特凯恩',
        'GI' => '直布罗陀',
        'FK' => '福克兰群岛',
        'KW' => '科威特',
        'KM' => '科摩罗',
        'CC' => '科科斯群岛',
        'PE' => '秘鲁',
        'TN' => '突尼斯',
        'LT' => '立陶宛',
        'SO' => '索马里',
        'JO' => '约旦',
        'NA' => '纳米比亚',
        'NU' => '纽埃',
        'MM' => '缅甸',
        'RO' => '罗马尼亚',
        'US' => '美国',
        'UM' => '美国边远小岛',
        'VI' => '美属维京群岛',
        'AS' => '美属萨摩亚',
        'LA' => '老挝人民民主共和国',
        'KE' => '肯尼亚',
        'FI' => '芬兰',
        'SD' => '苏丹',
        'SR' => '苏里南',
        'GB' => '英国',
        'IO' => '英属印度洋领地',
        'VG' => '英属维京群岛',
        'NL' => '荷兰',
        'AN' => '荷属安的列斯群岛',
        'MZ' => '莫桑比克',
        'LS' => '莱索托',
        'PH' => '菲律宾',
        'SV' => '萨尔瓦多',
        'WS' => '萨摩亚',
        'PT' => '葡萄牙',
        'MN' => '蒙古',
        'MS' => '蒙塞拉特群岛',
        'EH' => '西撒哈拉',
        'ES' => '西班牙',
        'NF' => '诺福克岛',
        'CI' => '象牙海岸',
        'BJ' => '贝宁',
        'ZM' => '赞比亚',
        'GQ' => '赤道几内亚',
        'HM' => '赫德与麦克唐纳群岛',
        'VN' => '越南',
        'AZ' => '阿塞拜疆',
        'AF' => '阿富汗',
        'DZ' => '阿尔及利亚',
        'AL' => '阿尔巴尼亚',
        'AE' => '阿拉伯联合酋长国',
        'OM' => '阿曼',
        'AR' => '阿根廷',
        'AW' => '阿鲁巴',
        'KR' => '韩国',
        'MK' => '马其顿',
        'MV' => '马尔代夫',
        'MW' => '马拉维',
        'MQ' => '马提尼克群岛',
        'MY' => '马来西亚',
        'YT' => '马约特',
        'MH' => '马绍尔群岛',
        'MT' => '马耳他',
        'MG' => '马达加斯加',
        'ML' => '马里',
        'LB' => '黎巴嫩',
        'ME' => '黑山共和国'
        ];
        
    public static function all()
    {
    	return static::$countries;
    }
}

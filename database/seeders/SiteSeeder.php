<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
                    [
                        'name' => 'Zoom Meeting Archive',
                        'thumbnail' => 'images/ZOOM_A.jpg',
                        'link' => 'http://172.19.11.92/owncloud/index.php/s/p1zxD9n0kSCnc19',
                        'category' => 'one',
                    ],
                    [
                        'name' => 'Web Site',
                        'thumbnail' => 'images/website1.png',
                        'link' => 'https://www.sbacbank.com',
                        'category' => 'one',
                    ],
                    [
                        'name' => 'FloraBank',
                        'thumbnail' => 'images/fb_w.jpg',
                        'link' => 'http://172.30.31.1:5971/FloraBankCBS/Public/UserLogin.aspx?ReturnUrl=%2fFloraBankCBS',
                        'category' => 'one',
                    ],
                    [
                        'name'        => 'FloraBankReportNew',
                        'thumbnail'   => 'images/fb_r.jpg',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.2:6972/'
                    ],
                    [
                        'name'        => 'FloraBankTradeFinance',
                        'thumbnail'   => 'images/fb_tf.jpg',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.10:8971'
                    ], 	
                    [
                        'name'        => 'FloraBankTreasury',
                        'thumbnail'   => 'images/fb_t.jpg',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.1:5971/FloraBankTreasury'
                    ],	
                    [
                        'name'        => 'Insafweb',
                        'thumbnail'   => 'images/fbi_w.jpg',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.30:6897/FloraBankInsaf'
                    ], 
                    [
                        'name'        => 'Insafreport',
                        'thumbnail'   => 'images/fbi_r.jpg',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.31:5683'
                    ], 
                    [
                        'name'        => 'Insaftradefinance',
                        'thumbnail'   => 'images/fbi_tf.jpg',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.32:5000'
                    ], 
                    [
                        'name'        => 'Insaftreasuryweb',
                        'thumbnail'   => 'images/fbi_t.jpg',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.30:6897/FloraBankTreasuryInsaf'
                    ],
                    [
                        'name'        => 'OBU',
                        'thumbnail'   => 'images/fbobu_w.JPG',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.4:7887/FloraBankOBU/'
                    ],
                    [
                        'name'        => 'OBU',
                        'thumbnail'   => 'images/fbobu_tf.JPG',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.5:5181/FloraBankOBU/'
                    ],
                    [
                        'name'        => 'OBU Report',
                        'thumbnail'   => 'images/fbobu_r.JPG',
                        'category'    => 'one',
                        'link'        => 'http://172.30.31.4:5009/'
                    ],
                    [
                        'name'        => 'Agent Banking',
                        'thumbnail'   => 'images/fb_abs.jpg',
                        'category'    => 'one',
                        'link'        => 'http://10.0.11.226:8057/login.aspx'
                    ],
                    /*[
                        'name'        => 'AML',
                        'thumbnail'   => 'images/AML.jpg',1d04f',
                        'category'    => 'one',
                        'link'        => 'aml_tab.php'
                    ],*/
                    [
                        'name'        => 'Contact',
                        'thumbnail'   => 'images/ECONTACT.png',
                        'category'    => 'one',
                        'link'        => ''
                    ],
                    [
                        'name'        => 'Policy and Manuals',
                        'thumbnail'   => 'images/MANUAL.png',
                        'category'    => 'one',
                        'link'        => ''
                    ],
                    [
                        'name'        => 'Circular',
                        'thumbnail'   => 'images/CIRCULAR.png',
                        'category'    => 'one',
                        'link'        => ''
                    ],
                    [
                        'name'        => 'Form',
                        'thumbnail'   => 'images/FORM.png',
                        'category'    => 'one',
                        'link'        => ''
                    ],
                    [
                        'name'        => 'sbac items',
                        'thumbnail'   => 'images/items.jpg',
                        'category'    => 'one',
                        'link'        => 'https://items.sbacbank.com'
                    ],
                    /*[
                        'name'        => 'email',
                        'thumbnail'   => 'images/MAIL.jpg',
                        'content'     => '',
                        'url'         => '',
                        'size'        => '2x2',
                        'theme'       => 'darkgreen',
                        'link'        => 'https://172.19.20.6/mail/'
                    ],*/
                    [
                        'name'        => 'new_email',
                        'thumbnail'   => 'images/email.jpg',
                        'category'    => 'one',
                        'link'        => 'https://sbacmx.sbacbank.com'
                    ],
                    [
                        'name'        => 'hrbook',
                        'thumbnail'   => 'images/hrh.jpg',
                        'category'    => 'one',
                        'link'        => 'https://hr.sbacbank.com/hrbook/login.php'
                    ],
                    [
                        'name'        => 'PF Management',
                        'thumbnail'   => 'images/pf_mngmnt.webp',
                        'category'    => 'one',
                        'link'        => 'https://pfm.sbacbank.com'
                    ],
                    [
                        'name'        => 'Hajj',
                        'thumbnail'   => 'images/Hajj.png',
                        'category'    => 'one',
                        'link'        => 'https://prps.pilgrimdb.org/'
                    ],
                    [
                        'name'        => 'cardmis',
                        'thumbnail'   => 'images/mis.jpg',
                        'category'    => 'one',
                        'link'        => 'http://172.19.11.92/owncloud/index.php/s/13cUDq8VNBZz66T'
                    ],
                    [
                        'name'        => 'DNS',
                        'thumbnail'   => 'images/DNS.JPG',
                        'category'    => 'one',
                        'link'        => 'https://nsd.finance.gov.bd/nsd/account/login?ReturnUrl=%2Fnsd%2F'
                    ],
                    [
                        'name'        => 'HSC',
                        'thumbnail'   => 'images/HSC.JPG',
                        'category'    => 'one',
                        'link'        => 'http://172.19.11.151/hs/'
                    ],
                    [
                        'name'        => 'ACS',
                        'thumbnail'   => 'images/acs.jpg',
                        'category'    => 'one',
                        'link'        => 'https://ibas.finance.gov.bd/acs'
                    ],
                    [
                        'name'        => 'Card Request',
                        'thumbnail'   => 'images/card_req.jpg',
                        'category'    => 'one',
                        'link'        => 'http://10.0.11.51/cardMIS/index.php'
                    ],
                    [
                        'name'        => 'Internet Banking',
                        'thumbnail'   => 'images/IB.jpg',
                        'category'    => 'one',
                        'link'        => '#'
                    ],/*
                    [
                        'name'        => 'IBanking Admin',
                        'thumbnail'   => 'images/IB_Admin.png',
                        'category'    => 'one',
                        'link'        => 'http://10.0.11.193:44437/login'
                    ]*/
                    
                    //two

                    [
                        'name'        => 'EKYC',
                        'thumbnail'   => 'images/ekyc.jpg',
                        'category' => 'two',
                        'link'        => 'http://172.19.11.92/owncloud/index.php/s/FM00NVosMGupivY'
                    ],
                    [
                        'name'        => 'SBAC Insight',
                        'thumbnail'   => 'images/insight.png',
                        'category'    => 'two',
                        'link'        => 'http://172.19.11.143/sbac_insight/'
                    ],
                    
                    [
                        'name'        => 'T24',
                        'thumbnail'   => 'images/T24.png',
                        'category'    => 'two',
                        'link'        => 'http://172.19.11.43:7096/BrowserWeb/servlet/BrowserServlet'
                    ],
                    [
                        'name'        => 'Dashboard',
                        'thumbnail'   => 'images/dashboard.jpg',
                        'category'    => 'two',          
                        'link'        => 'http://172.19.11.84/t24_rpt/'
                    ],        
                    [
                        'name'        => 'wasa',
                        'thumbnail'   => 'images/WASA.png',
                        'category'    => 'two',
                        'link'        => 'https://utility.sbacbank.com'
                    ],
                    [
                        'name'        => 'brta',
                        'thumbnail'   => 'images/BRTA.png',
                        'category'    => 'two',
                        'link'        => 'http://192.168.42.5:8888'
                    ],
                    [
                        'name'        => 'egp',
                        'thumbnail'   => 'images/EGP.png',
                        'category'    => 'two',
                        'link'        => 'https://www.eprocure.gov.bd/'
                    ],
                    /*[
                        'name'        => 'BACH',
                        'thumbnail'   => 'images/BACH.png',                
                        'category'    => 'two',          
                        'link'        => 'http://172.19.11.66/Login.aspx'
                    ],
                    [
                        'name'        => 'BEFTN',
                        'thumbnail'   => 'images/EFTN.png',
                        'category'    => 'two',          
                        'link'        => 'http://172.19.11.66:200/Login.aspx'
                    ],*/
                    [
                        'name'        => 'RTGS',
                        'thumbnail'   => 'images/RTGS.png',
                        'category'    => 'two',          
                        'link'        => 'https://sbacrtgs.sbacbank.com/ekhuni/'
                    ],
                    [
                        'name'        => 'BACH II',
                        'thumbnail'   => 'images/BACH2.png',
                        'category'    => 'two',          
                        'link'        => 'http://10.0.13.1:450/'
                    ],
                    /*[
                        'name'        => 'EFTN II',
                        'thumbnail'   => 'images/EFTN2.png',
                        'category'    => 'two',          
                        'link'        => 'http://10.0.13.1:200/'
                    ],*/
                    [
                        'name'        => 'Nikash',
                        'thumbnail'   => 'images/NIKASH.png',
                        'category'    => 'two',          
                        'link'        => 'https://nikash.sbacbank.com:7000/Login.aspx'
                    ],
                    /*[
                        'name'        => 'cardmis',
                        'thumbnail'   => 'images/cardmis.png',
                        'category'    => 'two',          
                        'link'        => 'http://172.19.11.92/owncloud/index.php/s/L1lPNlBWBQzz9kh'
                    ],
                    
                    [
                        'name'        => 'KYC360',
                        'thumbnail'   => 'images/KYC.png',
                        'category'    => 'two',,
                        'link'        => 'http://172.19.11.68/bankFM/'
                    ],
                    */
                    [
                        'name'        => 'BBR Report',
                        'thumbnail'   => 'images/BBR.png',
                        'category'    => 'two',         
                        'link'        => 'http://172.19.11.55/bbrweb/'
                    ],
                    
                    [
                        'name'        => 'FileShare',
                        'thumbnail'   => 'images/share.jpg',
                        'category'    => 'two',          
                        'link'        => 'http://172.19.11.92/owncloud/'
                    ],
                    
                    [
                        'name'        => 'Remittance',
                        'thumbnail'   => 'images/r.png',
                        'category'    => 'two',
                        'link'        => 'http://172.19.11.72/mt/login/index.html'
                    ],
                    [
                        'name'        => 'BB',
                        'thumbnail'   => 'images/BB.png',
                        'category'    => 'two',
                        'link'        => 'https://www.bb.org.bd/'
                    ],
                    [
                        'name'        => 'Software',
                        'thumbnail'   => 'images/software.png',
                        'category'    => 'two',          
                        'link'        => 'http://172.19.11.92/owncloud/index.php/s/AhuYP3VhIk21Hc6'
                    ],
                    [
                        'name'        => 'iss',
                        'thumbnail'   => 'images/iss.png',
                        'category'    => 'two',
                        'link'        => 'http://172.19.11.32/ISS/'
                    ],
                    /*[
                        'name'        => 'HSC',
                        'thumbnail'   => 'images/HSC.jpg',
                        'category'    => 'two',          
                        'link'        => 'http://172.19.11.151/hs/'
                    ],*/
                    [
                        'name'        => 'PROBLEM LOG',
                        'thumbnail'   => 'images/pl.png',
                        'category'    => 'two',
                        'link'        => 'http://172.19.11.132/plog/index.php'
                    ],
                    [
                        'name'        => 'VP',
                        'thumbnail'   => 'images/VP.jpg',
                        'category'    => 'two',
                        'link'        => 'http://172.19.11.151/bod/'
                    ],
                    [
                        'name'        => 'EC',
                        'thumbnail'   => 'images/ec.jpg',
                        'category'    => 'two',
                        'link'        => 'https://192.168.249.10/partner-portal/login/'
                    ],
                    [
                        'name'        => 'PO',
                        'thumbnail'   => 'images/PO.png',
                        'category'    => 'two',          
                        'link'        => 'https://sbacrtgs.sbacbank.com/egprint/login/'
                    ],
                    [
                        'name'        => 'VP',
                        'thumbnail'   => 'images/riskRegister.webp',
                        'category'    => 'two',
                        'link'        => 'http://172.19.11.151/report_register2/'
                    ],


                    //three


                    [
                        'name'        => 'WU',
                        'thumbnail'   => 'images/WU.png',
                        'category' => 'three',
                        'link'        => 'https://wupos.westernunion.com'
                    ],
                    [
                        'name'        => 'WU2',
                        'thumbnail'   => 'images/WU2.png',
                        'category'    => 'three',
                        'link'        => 'https://wupos2lb.westernunion.com/tablet-ui/login'
                    ],
                    [
                        'name'        => 'EM',
                        'thumbnail'   => 'images/EM.png',
                        'category' => 'three',
                        'link'        => 'https://www.xpressmoney.biz'
                    ],
                    [
                        'name'        => 'RIA',
                        'thumbnail'   => 'images/RIA.png',
                        'category' => 'three',
                        'link'        => 'https://fxonline.riaenvia.net'
                    ],
                    [
                        'name'        => 'AMAN',
                        'thumbnail'   => 'images/AMAN.png',
                        'category' => 'three',
                        'link'        => 'http://www.amankuwait.com/AmanWebsite/Default.aspx'
                    ],
                    [
                        'name'        => 'PALCID',
                        'thumbnail'   => 'images/PALCID.png',
                        'category' => 'three',
                        'link'        => 'https://pen.placid.net/transdelnew/index.php'
                    ],
                    [
                        'name'        => 'TURBO',
                        'thumbnail'   => 'images/TURBO.png',
                        'category' => 'three',
                        'link'        => 'https://www.turboremit.com/turbocash/default.asp'
                    ],
                    [
                        'name'        => 'SMALL WORLD',
                        'thumbnail'   => 'images/sw.png',
                        'category' => 'three',
                        'link'        => 'https://main.oswfs.com/NexxarGenWeb'
                    ],
                    [
                        'name'        => 'SHA GLOBAL',
                        'thumbnail'   => 'images/sha.png',
                        'category' => 'three',
                        'link'        => 'https://remit.by/west2east'
                    ],
                    [
                        'name'        => 'TRANSFAST',
                        'thumbnail'   => 'images/TRANSFAST.png',
                        'category' => 'three',
                        'link'        => 'https://pay.transfast.com'
                    ],
                    [
                        'name'        => 'MANIGRAM',
                        'thumbnail'   => 'images/MANIGRAM.png',
                        'category' => 'three',
                        'link'        => 'https://mg.nccbank.com.bd/mgca/apps/login'
                    ],
                    [
                        'name'        => 'CASH',
                        'thumbnail'   => 'images/cashe.png',
                        'category' => 'three',
                        'link'        => 'https://secure.cashexpress.ae'
                    ],
                    [
                        'name'        => 'NEC',
                        'thumbnail'   => 'images/NEC.jpg',
                        'category' => 'three',
                        'link'        => 'https://speedcash.necmoney.com'
                    ],
                    [
                        'name'        => 'SM',
                        'thumbnail'   => 'images/SM.png',
                        'category' => 'three',
                        'link'        => 'https://gremit.sunmanexpress.com/frmmain.wgx'
                    ],
                    [
                        'name'        => 'Exchange House List',
                        'thumbnail'   => 'images/ex_house.png',
                        'category' => 'three',
                        'link'        => 'http://172.19.11.1/sbac/circular_adm/upload/sbac/2014/EXCHANGE_HOUSE_LIST.pdf'         
                    ]
            ];    
        DB::table('sites')->insert($data);
    }
}

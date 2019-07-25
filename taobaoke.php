<?php
/**
 * taobaoke.php
 * author          :  hulei <e@phpsb.cn>
 * createTime      :  2019/7/25 10:16
 * descripition    :  淘宝客链接解析成淘宝链接的算法, 目前淘宝客有2种链接 一种是有优惠券的一种是无优惠券的两种算法不一样.需要分开解析
 */


//淘宝客链接解析

//这是有优惠券的链接
$url = 'https://uland.taobao.com/coupon/edetail?e=ZxYt374GXf0GQASttHIRqTG1D2dHaEBLXtsVxaHvfep7QAl6MtTPEYozeT3%2BOnLChrj0Q2B61X8fOFRo4UJrjegnB7eIEWqovFq58Q5HmE0bscyiQoaCRSgMlpGAPoOv6j22DV7f%2FiYiqLaEh1vvxAlqpuf3Iu7Opqze73QlVj6wvPtCw4RzVBemP0hpIIPvjDppvlX%2Bob8NlNJBuapvQ2MDg9t1zp0R8pjV3C9qcwR06OH4T1gtLC4drz1ceaF6&traceId=0b0b7b8f15639458477566775e&union_lens=lensId:0b150a5c_0bc0_16c226fcbfd_534b&materialId=pI9gDubfnAI&materialType=1&ext=default&linkType=1&visitorId=e1wVyDB0Uv0&authorId=XWSBnnal2qE&carrierId=zSE6_cLzCCY&carrierType=2&itemId=6DnJzODETZU&sourceType=2&clientVersion=6.2.3.8614&clientId=2';

//这种开头的是无优惠券的链接
$url = 'https://s.click.taobao.com/';

如何解析成淘宝链接联系邮箱e@phpsb.cn
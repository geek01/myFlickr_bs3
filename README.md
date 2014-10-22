myFlickr
========

Xoops Modules

## 說明
* myFlickr是一個Xoops模組，此模組可以秀出Flickr相片、相片集、珍藏集及最愛相片
* 此模組使用phpFlickr( Dan Coulter , http://phpflickr.com/ )操作Flickr API
* 此版本升級使用bootstrap3並且不須搭配安裝TadTools
* 注意下載後需將模組資料夾名稱由 myFlickr_bs3-master 更改為 myFlickr 後安裝
* 因為相片集需要使用分頁，原作者沒有納入，所以修改了phpFlickr.php line1326 1328，line367增加Large Square尺寸 

## 使用
和一般Xoops模組安裝方式相同，安裝後至模組後台偏好設定：
* 輸入Flickr User ID(在Flickr網址中類似 12345678@N05 的一段字串)
* 輸入Flickr API key(至 http://www.flickr.com/services/api/keys/ 取得Flickr API Key)
* Windows主機因為憑證問題，請在phpFlickr.php加入curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

移至前台即可顯示Flickr的相片


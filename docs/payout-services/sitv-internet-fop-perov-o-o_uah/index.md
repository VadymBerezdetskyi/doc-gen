## General 
**Code:** `sitv-internet-fop-perov-o-o_uah`  
**Method:** `sitv-internet-fop-perov-o-o`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\d{1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\d{1,128}$/`  
Required: `1`  
Label:  
: [en] UID  
: [uk] UID  
: [ru] UID  
Hint:  
: [en] Enter UID  
: [uk] Вкажіть UID  
: [ru] Укажите UID  
## JSON Object 
```json
 {"code":"sitv-internet-fop-perov-o-o_uah","method":"sitv-internet-fop-perov-o-o","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"UID","uk":"UID","ru":"UID"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter UID","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c UID","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 UID"}}],"amount_min":2,"amount_max":14999}```  

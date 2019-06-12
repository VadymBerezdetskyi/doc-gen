## General 
**Code:** `itk-internet-fop-kozlenko-s-m-sumi_uah`  
**Method:** `itk-internet-fop-kozlenko-s-m-sumi`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `15`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] Specify UID  
: [uk] UID  
: [ru] UID  
Hint:  
: [en] Specify UID  
: [uk] Вкажіть UID  
: [ru] Укажите UID  
## JSON Object 
```json
 {"code":"itk-internet-fop-kozlenko-s-m-sumi_uah","method":"itk-internet-fop-kozlenko-s-m-sumi","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Specify UID","uk":"UID","ru":"UID"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Specify UID","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c UID","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 UID"}}],"amount_min":15,"amount_max":14999}```  

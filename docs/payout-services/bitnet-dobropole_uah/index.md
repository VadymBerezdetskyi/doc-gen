## General 
**Code:** `bitnet-dobropole_uah`  
**Method:** `bitnet-dobropole`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `20`  to `14999`  UAH ## Fields 
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
: [en] UID  
: [uk] UID  
: [ru] UID  
## JSON Object 
```json
 {"code":"bitnet-dobropole_uah","method":"bitnet-dobropole","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"UID","uk":"UID","ru":"UID"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"UID","uk":"UID","ru":"UID"},"example":"005637"}],"amount_min":20,"amount_max":14999}```  

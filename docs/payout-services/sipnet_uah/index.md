## General 
**Code:** `sipnet_uah`  
**Method:** `sipnet`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `25`  to `14999`  UAH ## Fields 
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
: [en] ID  
: [uk] ID  
: [ru] ID  
Hint:  
: [en] ID  
: [uk] ID  
: [ru] ID  
## JSON Object 
```json
 {"code":"sipnet_uah","method":"sipnet","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID","uk":"ID","ru":"ID"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"ID","uk":"ID","ru":"ID"},"example":"1431315"}],"amount_min":25,"amount_max":14999}```  

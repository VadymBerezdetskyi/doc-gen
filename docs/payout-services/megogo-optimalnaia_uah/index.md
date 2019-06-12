## General 
**Code:** `megogo-optimalnaia_uah`  
**Method:** `megogo-optimalnaia`  
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
: [en] MEGOGO ID  
: [uk] MEGOGO ID  
: [ru] MEGOGO ID  
Hint:  
: [en] MEGOGO ID  
: [uk] MEGOGO ID  
: [ru] MEGOGO ID  
## JSON Object 
```json
 {"code":"megogo-optimalnaia_uah","method":"megogo-optimalnaia","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"MEGOGO ID","uk":"MEGOGO ID","ru":"MEGOGO ID"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"MEGOGO ID","uk":"MEGOGO ID","ru":"MEGOGO ID"},"example":"201956241"}],"amount_min":2,"amount_max":14999}```  

## General 
**Code:** `trk-planeta-chernivtsi_uah`  
**Method:** `trk-planeta-chernivtsi`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `1080`  UAH ## Fields 
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
: [en] Contract Number  
: [uk] Номер договору  
: [ru] Номер договора  
Hint:  
: [en] Contract Number  
: [uk] Номер договору  
: [ru] Номер договора  
## JSON Object 
```json
 {"code":"trk-planeta-chernivtsi_uah","method":"trk-planeta-chernivtsi","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Contract Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Contract Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"example":"2310"}],"amount_min":1,"amount_max":1080}```  

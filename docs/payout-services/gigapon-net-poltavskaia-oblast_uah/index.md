## General 
**Code:** `gigapon-net-poltavskaia-oblast_uah`  
**Method:** `gigapon-net-poltavskaia-oblast`  
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
: [en] ІPN Code  
: [uk] Код ІПН  
: [ru] Код ІПН  
Hint:  
: [en] ІPN Code  
: [uk] Код ІПН  
: [ru] Код ІПН  
## JSON Object 
```json
 {"code":"gigapon-net-poltavskaia-oblast_uah","method":"gigapon-net-poltavskaia-oblast","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"\u0406PN Code","uk":"\u041a\u043e\u0434 \u0406\u041f\u041d","ru":"\u041a\u043e\u0434 \u0406\u041f\u041d"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"\u0406PN Code","uk":"\u041a\u043e\u0434 \u0406\u041f\u041d","ru":"\u041a\u043e\u0434 \u0406\u041f\u041d"},"example":"1234567899"}],"amount_min":2,"amount_max":14999}```  

## General 
**Code:** `x-net-khotin-net-chernovitskaia-obl_uah`  
**Method:** `x-net-khotin-net-chernovitskaia-obl`  
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
: [en] Contract number  
: [uk] Номер договору  
: [ru] Номер договора  
Hint:  
: [en] Contract number  
: [uk] Номер договору  
: [ru] Номер договора  
## JSON Object 
```json
 {"code":"x-net-khotin-net-chernovitskaia-obl_uah","method":"x-net-khotin-net-chernovitskaia-obl","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Contract number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Contract number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"example":"11"}],"amount_min":2,"amount_max":14999}```  

## General 
**Code:** `belcom_uah`  
**Method:** `belcom`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `5`  to `5000`  UAH ## Fields 
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
: [en] Contract Number  
: [uk] Номер договору  
: [ru] Номер договора  
Hint:  
: [en] Contract Number  
: [uk] Номер договору  
: [ru] Номер договора  
## JSON Object 
```json
 {"code":"belcom_uah","method":"belcom","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Contract Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Contract Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"example":"21964"}],"amount_min":5,"amount_max":5000}```  

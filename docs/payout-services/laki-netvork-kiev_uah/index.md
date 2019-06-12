## General 
**Code:** `laki-netvork-kiev_uah`  
**Method:** `laki-netvork-kiev`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `14999`  UAH ## Fields 
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
: [en] Contract number  
: [uk] Номер договору  
: [ru] Номер договору  
Hint:  
: [en] Contract number  
: [uk] Номер договору  
: [ru] Номер договору  
## JSON Object 
```json
 {"code":"laki-netvork-kiev_uah","method":"laki-netvork-kiev","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Contract number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Contract number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443"},"example":"10155-15"}],"amount_min":1,"amount_max":14999}```  

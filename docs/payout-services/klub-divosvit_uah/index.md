## General 
**Code:** `klub-divosvit_uah`  
**Method:** `klub-divosvit`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `0.01`  to `14999`  UAH ## Fields 
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
: [en] Name  
: [uk] ПІБ  
: [ru] ФИО  
Hint:  
: [en] Name  
: [uk] ПІБ  
: [ru] ФИО  
## JSON Object 
```json
 {"code":"klub-divosvit_uah","method":"klub-divosvit","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Name","uk":"\u041f\u0406\u0411","ru":"\u0424\u0418\u041e"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Name","uk":"\u041f\u0406\u0411","ru":"\u0424\u0418\u041e"},"example":"\u0421\u0438\u0434\u043e\u0440\u043e\u0432 \u0412\u041f"}],"amount_min":0.01,"amount_max":14999}```  

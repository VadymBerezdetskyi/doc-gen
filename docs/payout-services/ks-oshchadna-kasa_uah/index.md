## General 
**Code:** `ks-oshchadna-kasa_uah`  
**Method:** `ks-oshchadna-kasa`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `8000`  UAH ## Fields 
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
: [en] Loan Agreement Number  
: [uk] Номер кредитного договору  
: [ru] Номер кредитного договора  
Hint:  
: [en] Loan Agreement Number  
: [uk] Номер кредитного договору  
: [ru] Номер кредитного договора  
## JSON Object 
```json
 {"code":"ks-oshchadna-kasa_uah","method":"ks-oshchadna-kasa","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Loan Agreement Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0440\u0435\u0434\u0438\u0442\u043d\u043e\u0433\u043e \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0440\u0435\u0434\u0438\u0442\u043d\u043e\u0433\u043e \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Loan Agreement Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0440\u0435\u0434\u0438\u0442\u043d\u043e\u0433\u043e \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0440\u0435\u0434\u0438\u0442\u043d\u043e\u0433\u043e \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"example":"11072014-020"}],"amount_min":1,"amount_max":8000}```  

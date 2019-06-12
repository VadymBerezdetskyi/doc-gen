## General 
**Code:** `3dcom-kiyivska-obl_uah`  
**Method:** `3dcom-kiyivska-obl`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
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
: [en] PII # Contract Number  
: [uk] ПIБ # Номер договору  
: [ru] ФИО # Номер договора  
Hint:  
: [en] PII # Contract Number  
: [uk] ПIБ # Номер договору  
: [ru] ФИО # Номер договора  
## JSON Object 
```json
 {"code":"3dcom-kiyivska-obl_uah","method":"3dcom-kiyivska-obl","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"PII # Contract Number","uk":"\u041fI\u0411 # \u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u0424\u0418\u041e # \u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"PII # Contract Number","uk":"\u041fI\u0411 # \u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443","ru":"\u0424\u0418\u041e # \u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430"},"example":"\u041f\u0435\u0442\u0440\u043e\u0432 \u0410.\u0410.#123456"}],"amount_min":2,"amount_max":14999}```  

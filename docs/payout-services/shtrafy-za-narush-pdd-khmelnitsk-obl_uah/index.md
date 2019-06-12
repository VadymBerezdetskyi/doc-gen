## General 
**Code:** `shtrafy-za-narush-pdd-khmelnitsk-obl_uah`  
**Method:** `shtrafy-za-narush-pdd-khmelnitsk-obl`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `50`  to `14999`  UAH ## Fields 
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
: [en] Series.Number of protocol.Number of phone.FIO  
: [uk] Серія.Номер протокола.Номер телефона.ФІО  
: [ru] Серия.Номер протокола.Номер телефона.ФИО  
Hint:  
: [en] Series.Number of protocol.Number of phone.FIO  
: [uk] Серія.Номер протокола.Номер телефона.ФІО  
: [ru] Серия.Номер протокола.Номер телефона.ФИО  
## JSON Object 
```json
 {"code":"shtrafy-za-narush-pdd-khmelnitsk-obl_uah","method":"shtrafy-za-narush-pdd-khmelnitsk-obl","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Series.Number of protocol.Number of phone.FIO","uk":"\u0421\u0435\u0440\u0456\u044f.\u041d\u043e\u043c\u0435\u0440 \u043f\u0440\u043e\u0442\u043e\u043a\u043e\u043b\u0430.\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430.\u0424\u0406\u041e","ru":"\u0421\u0435\u0440\u0438\u044f.\u041d\u043e\u043c\u0435\u0440 \u043f\u0440\u043e\u0442\u043e\u043a\u043e\u043b\u0430.\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430.\u0424\u0418\u041e"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Series.Number of protocol.Number of phone.FIO","uk":"\u0421\u0435\u0440\u0456\u044f.\u041d\u043e\u043c\u0435\u0440 \u043f\u0440\u043e\u0442\u043e\u043a\u043e\u043b\u0430.\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430.\u0424\u0406\u041e","ru":"\u0421\u0435\u0440\u0438\u044f.\u041d\u043e\u043c\u0435\u0440 \u043f\u0440\u043e\u0442\u043e\u043a\u043e\u043b\u0430.\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430.\u0424\u0418\u041e"},"example":"\u0410\u04101.123456.0970000000.\u0418\u0432\u0430\u043d\u043e\u0432 \u0418\u0418"}],"amount_min":50,"amount_max":14999}```  

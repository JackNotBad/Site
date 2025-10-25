import parse from "html-react-parser";
import { nettoyerTexte, backPublicPath } from '../utils';

export default function BlockSection({
  title,
  text,
  imgSrc,
  imgAlt = "",
  imgFirst = false,
  containerClass = "",
  imgClass = "",
  textClass = "",
  children,
}) {

  const baseContainer = `
    flex flex-col text-center
    max-w-150 mx-auto p-5 box-content 
    lg:flex-row lg:text-left lg:max-w-300
  `;

  const baseImgClass = `
    object-contain
    max-w-88 w-full
    mx-auto mt-11
    lg:mt-0 lg:mx-0 lg:mr-26 lg:max-w-135 lg:w-135 lg:max-h-130 lg:h-130
  `;

  const baseTextClass = `
    mb-0 mt-5 text-center
    lg:mt-0 lg:mx-0 lg:mr-26 lg:max-w-135 lg:w-135 lg:max-h-130 lg:h-70
  `;

  return (
    <section className={`${baseContainer} ${containerClass}`}>
      {imgFirst ? (
        <>
          {imgSrc && (
            <img
              src={`${backPublicPath}${imgSrc.replace(/^\//, "")}`}
              alt={imgAlt}
              className={`${baseImgClass} ${imgClass}`}
            />
          )}
          <div className={`${baseTextClass} ${textClass}`}>
            {children ?? <>{title}</>}
            <p>{parse(nettoyerTexte(text))}</p>
          </div>
        </>
      ) : (
        <>
          <div className={`${baseTextClass} ${textClass}`}>
            {children ?? <>{title}</>}
            <p>{parse(nettoyerTexte(text))}</p>
          </div>
          {imgSrc && (
            <img
              src={`${backPublicPath}${imgSrc.replace(/^\//, "")}`}
              alt={imgAlt}
              className={`${baseImgClass} ${imgClass}`}
            />
          )}
        </>
      )}
    </section>
  );
}
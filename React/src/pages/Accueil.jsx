import { useState, useEffect } from "react";
import React from "react";
import parse from "html-react-parser";
import Slider from "../components/Slider";
import Carousel from "../components/Carousel";
import { nettoyerTexte } from '../utils';


const backPublicPath = "http://localhost:8000/uploads/";

export default function Accueil() {

  const [modifications, setModifications] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [carousels, setCarousels] = useState([]);

  useEffect(() => {
    fetch("https://127.0.0.1:8000/api/sections/?Page_Id=1")
      .then((response) => {
        if (!response.ok) {
          throw new Error("Erreur lors de la récupération des données");
        }
        return response.json();
      })
      .then((data) => {
        const arrayModifications = data.member.map((item) => ({
          id: item.id,
          image: item.Image_Id,
          position: item.Position,
          texte: item.Text,
          titre: item.Title,
          url: item.Image_Id?.url,
          alt: item.Image_Id?.alt,
        }));
        setModifications(arrayModifications);
        setIsLoading(false);
      })
      .catch((error) => {
        console.error("Erreur:", error);
        setIsLoading(false);
      });
  }, []);

  useEffect(() => {
    fetch("https://127.0.0.1:8000/api/carousels/")
      .then((response) => {
        if (!response.ok) throw new Error("Erreur carousels: " + response.status);
        return response.json();
      })
      .then((data) => {
        const members = data?.member ?? [];

        const result = members.map((carousel) => {
          const cid = carousel?.id ?? null;
          const ctitle = carousel?.title ?? "";
          const imgs = (carousel.images ?? [])
            .slice()
            .sort((a, b) => (a.position ?? 0) - (b.position ?? 0))
            .map((carouselitem) => {
              const filename = carouselitem?.image?.url;
              if (!filename) return null;
              return {
                url: backPublicPath + String(filename).replace(/^\//, ""),
                alt: carouselitem?.image?.alt ?? "",
                position: carouselitem?.position ?? null,
              };
            })
            .filter(Boolean);

          return { id: cid, title: ctitle, images: imgs };
        });

        setCarousels(result);
      })
      .catch((err) => {
        console.error("Erreur fetch carousels:", err);
        setCarousels([]);
      });
  }, []);

  const photos = React.useMemo(() => {
    return carousels.flatMap((c) => c.images.map((img) => img.url));
  }, [carousels]);

  if (isLoading) {
    return <div className="text-center py-8">Chargement en cours...</div>;
  }

  return (
    <>
      <section
        className="
          flex flex-col text-center
          max-w-150 mx-auto px-5 p-5 box-content
          lg:flex-row lg:text-left lg:max-w-300 lg:py-26
        "
      >
        <img
          src={
            backPublicPath.concat(
              "",
              modifications.find((item) => item.position === 1)?.url
            )
          }
          className="
            object-cover
            max-w-88 w-full
            mx-auto mt-11
            lg:mt-0 lg:mx-0 lg:mr-26 lg:max-w-135 lg:w-135 lg:max-h-130 lg:h-130
          "
          alt={modifications.find((item) => item.position === 1)?.alt}
        />
        <div
          className="
            mb-0
            lg:mt-0 lg:mx-0 lg:mr-26 lg:max-w-135 lg:w-135 lg:max-h-130 lg:h-130
          "
        >
          <h2 className="mb-5">{parse(nettoyerTexte(modifications.find((item) => item.position === 1)?.titre))}</h2>
          <p className="whitespace-pre-line">
            {parse(nettoyerTexte(modifications.find((item) => item.position === 1)?.texte))}
          </p>
        </div>
      </section>
      <section
        className="
          flex flex-col text-center
          max-w-300 mx-auto p-5 box-content
          lg:flex-row lg:text-left lg:max-w-300 lg:py-26
        "
      >
        <Slider />
      </section>
      <section className="flex-col max-w-300 px-5 mx-auto box-content flex">
        <Carousel photos={photos} startIndex={3} />
      </section>
    </>
  );
}
import { useEffect, useState } from "react";
import Section from "../components/Sections";
import Modal from "../components/Modal";

export default function Prestations() {
  const [sections, setSections] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState(null);

  const [open, setOpen] = useState(false);
  const [photos, setPhotos] = useState([]);

  useEffect(() => {
    setIsLoading(true);
    fetch("https://127.0.0.1:8000/api/sections/?Page_Id=3")
      .then((response) => {
        if (!response.ok) throw new Error("Erreur réseau");
        return response.json();
      })
      .then((data) => {
        console.log(data, "data prestations")
        const formattedSections = data.member.map((item) => ({
          id: item.id,
          title: item.Title,
          text: item.Text,
          imgSrc: item.Image_Id?.url || null,
          imgAlt: item.Image_Id?.alt || "",
          position: item.Position,
          details: (item.detailsSectionImages || []).map((d) => d.image?.url || d),
        }));
        setSections(formattedSections);
        setIsLoading(false);
      })
      .catch((err) => {
        console.error("Erreur:", err);
        setError(err.message || "Erreur");
        setIsLoading(false);
      });
  }, []);

  const openModal = (images) => {
    setPhotos(images || []);
    setOpen(true);
  };

  if (isLoading) return <div className="py-12 text-center">Chargement...</div>;
  if (error) return <div className="py-12 text-center text-red-600">Erreur : {error}</div>;

  return (
    <div>
      {sections.map((s, index) => (
        <section key={s.id} className="py-12">
          {/* utilise le composant Section */}
          <Section
            title={<h2 className="text-xl font-semibold mb-4">{s.title}</h2>}
            text={s.text}
            imgSrc={s.imgSrc}
            imgAlt={s.imgAlt}
            imgFirst={index % 2 === 0}
            containerClass="items-center"
            imgClass="max-w-135"
            textClass="lg:max-w-135"
          />
          {/* bouton Réalisations si details présents */}
          {s.details && s.details.length > 0 && (
            <div className="text-center mt-4">
              <button
                onClick={() => openModal(s.details)}
                className="inline-block max-w-28 mt-2 bg-[var(--orange)] text-white px-4 py-2 rounded shadow hover:bg-[var(--pink)] transition"
              >
                Réalisations
              </button>
            </div>
          )}
        </section>
      ))}

      <Modal open={open} onClose={() => setOpen(false)} photos={photos} />
    </div>
  );
}

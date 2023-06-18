import {Environment, OrbitControls, Sky,ContactShadows} from "@react-three/drei";
import { Avatar } from "./Avatar.jsx";
import { useControls } from "leva";
export const Experience = () => {

    const {animations } = useControls({
        animations: {
            value: "Typing",
            options: ["Typing", "Laying"]
        }

    });

  return (
    <>
      <OrbitControls />
        <Sky />
        <Environment preset="sunset" />
        <ContactShadows opacity={1} scale={10} blur={1} far={10} resolution={256} color="#000000" />
        <group position={[0, -1.20, 0]}>
            <Avatar animation={animations} />
        </group>

      <ambientLight intensity={1} />
        {
            animations === "Typing" ? (
                <mesh position={[0, -1, -0.15]}>
                    <boxGeometry args={[1, 0.5, 1]} />
                    <meshStandardMaterial color="hotpink" />
                </mesh>
            ) : null
        }

        <mesh position={[0, -1.25, -0.15]}>
            //floor
            <boxGeometry args={[5, 0.1, 5]} />
            <meshStandardMaterial color="red" />
        </mesh>
        </>
  );
};
